<?php
namespace BullSoft;

use PhalconPlus\Assert\Assertion as Assert;
use PhalconPlus\Base\Pagable;

class Sequence
{
    const REDIS_PREFIX = 'id-sequence';
    const STEP = 500;

    protected $entityClass;
    protected $redis;

    public function __construct($entityClass, \Redis $redis)
    {
        if(! class_exists($entityClass)) {
            throw new \Exception("Sequence Entity class {$entityClass} not extis");
        }
        $this->entityClass = $entityClass;
        $this->redis = $redis;
    }

    private function getKey($app, $bucket)
    {
        return implode(":", [
            self::REDIS_PREFIX,
            $app,
            $bucket
        ]);
    }

    public function generate($app, $bucket, $step = 0)
    {
        Assert::notEmpty($bucket);
        Assert::minLength($bucket, 5);
        Assert::notEmpty($app);

        // Redis Key
        $redisKey = $this->getKey($app, $bucket);
        $redis = $this->redis;
        if($step <= 0) {
            $step = self::STEP;
        }

        if ($pk = $redis->lPop($redisKey))  {
            return $pk;
        } else {
            // 尝试从mysql取step
            $condition = " app = :app: AND bucket = :bucket:";
            $bindArray = [
                    'app' => $app,
                    'bucket' => $bucket,
            ];
            $seqRow = $this->entityClass::findFirst(array($condition, 'bind' => $bindArray));
            if ($seqRow != false && $seqRow->step > 0) {
                $step = $seqRow->step;
            }
            $model = new $this->entityClass();
            $db = $model->getWriteConnection();
            $query = "UPDATE `". $model->getSource(). "` SET `seq` = LAST_INSERT_ID(`seq` + {$step}) WHERE `app`='{$app}' AND `bucket`='{$bucket}'";
            
            ////////////////////////////////////////////////////////////////////
            // 处理循环
            ////////////////////////////////////////////////////////////////////
            if (($seqRow->cycle == 1) &&
                ($seqRow->minValue > 0) &&
                ($seqRow->maxValue > $seqRow->minValue)) {
                $cycle = 1;
            } else {
                $cycle = 0;
            }
            if ($cycle == 1) {
                if ($seqRow->step + $seqRow->seq >= $seqRow->maxValue) {
                    $step = $seqRow->maxValue - $seqRow->seq;
                    $query = "UPDATE `". $model->getSource(). "` SET `seq` = LAST_INSERT_ID({$seqRow->minValue}) WHERE `app`='{$app}' AND `bucket`='{$bucket}'";
                }
            }
            ////////////////////////////////////////////////////////////////////
            $flag = $db->execute($query);
            $affactedRows = $db->affectedRows();
            if(!$flag || $affactedRows <= 0) {
                throw new \Exception("网络繁忙");
            }
            $sequence = $db->lastInsertId();
            //////////////////////////////////
            // 处理循环
            if ($cycle == 1) {
                if ($sequence <= $seqRow->minValue) {
                    $sequence = $seqRow->maxValue;
                }
            }
            //////////////////////////////////
            // Redis Transaction
            $redis->multi();
            for ($i = $step; $i > 0; $i--) {
                $redis->rPush($redisKey, $sequence - $i + 1);
            }
            $redis->exec();
            $pk = $this->generate($app, $bucket, $step);
            return $pk;
        }
    }

    public function initSeq($app, $bucket, $start = 0, $step = 0)
    {
        Assert::notEmpty($bucket);
        Assert::minLength($bucket, 5);
        Assert::notEmpty($app);
        Assert::integer($start);
        Assert::min($start, 0);
        if ($step <= 0) {
            $step = self::STEP;
        }

        $model = $this->entityClass();
        $db = $model->getWriteConnection();
        $db->begin();
        $query = "SET @maxId = (SELECT MAX(`id`) FROM `".$model->getSource()."`); " .
            "INSERT INTO `" . $model->getSource() . "` (`id`, `app`, `bucket`, `seq`, `step`) VALUES (@maxId+1, ?, ?, ?, ?);";
        $success = $db->execute($query, array($app, $bucket, $start, $step));
        // 事务，只能在这里拿到插入ID
        $id = $db->lastInsertId();
        if(!$success) {
            $db->rollback();
            throw new \Exception("初始化ID序列失败");
        }
        $db->commit();
        return $id;
    }

    public function getListPageable(Pagable $pagable)
    {
        return $this->entityClass::findByPagable($pagable);
    }

    public function checkCacheRestSeq($id)
    {
        // 获取mysql数据库的信息
        Assert::integer($id);
        $condition = "id = {$id}";
        $item = $this->entityClass::findFirst($condition);
        if ($item != false) {
            $item = $item->toArray();
        } else {
            throw new \Exception("获取发号内容失败");
        }
        $app = $item['app'];
        $bucket = $item['bucket'];
        $step = 0;

        Assert::notEmpty($bucket);
        Assert::minLength($bucket, 5);
        Assert::notEmpty($app);

        // Redis Key
        $redisKey = $this->getKey($app, $bucket);
        $redis = $this->redis;
        if($step <= 0) {
            $step = self::STEP;
        }

        $len = $redis->llen($redisKey);
        if ($len < intval($step/2)) {
            $model = new $this->entityClass();
            $db = $model->getWriteConnection();
            $query = "UPDATE `". $model->getSource(). "` SET `seq` = LAST_INSERT_ID(`seq` + {$step}) WHERE `app`='{$app}' AND `bucket`='{$bucket}'";
            ////////////////////////////////////////////////////////////////////
            // 处理循环
            ////////////////////////////////////////////////////////////////////
            if (($item['cycle'] == 1) &&
                ($item['minValue'] > 0) &&
                ($item['maxValue'] > $item['minValue'])) {
                    $cycle = 1;
                } else {
                    $cycle = 0;
                }
            if ($cycle == 1) {
                if ($item['step'] + $item['seq'] >= $item['maxValue']) {
                    $step = $item['maxValue'] - $item['seq'];
                    $query = "UPDATE `". $model->getSource(). "` SET `seq` = LAST_INSERT_ID({$item['minValue']}) WHERE `app`='{$app}' AND `bucket`='{$bucket}'";
                }
            }
            ////////////////////////////////////////////////////////////////////
            $flag = $db->execute($query);
            $affactedRows = $db->affectedRows();
            if(!$flag || $affactedRows <= 0) {
                throw new \Exception("网络繁忙");
            }
            $sequence = $db->lastInsertId();
            //////////////////////////////////
            // 处理循环
            if ($cycle == 1) {
                if ($sequence <= $item['minValue']) {
                    $sequence = $item['maxValue'];
                }
            }
            //////////////////////////////////
            // Redis Transaction
            $redis->multi();
            for ($i = $step; $i > 0; $i--) {
                $redis->rPush($redisKey, $sequence - $i + 1);
            }
            $redis->exec();
        }
    }

    public function getRestAndNext($app, $bucket)
    {
        // Redis Key
        $redisKey = $this->getKey($app, $bucket);
        $redis = $this->redis;
        $restSize = $redis->llen($redisKey);
        // nextValue
        $nextValue = $redis->lindex($redisKey, 0);
        return array(
            'restSize' => $restSize,
            'nextValue' => $nextValue
        );
    }
}
