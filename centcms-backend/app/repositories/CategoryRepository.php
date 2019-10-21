<?php

namespace LightCloud\CentCMS\Backend\Repositories;

use LightCloud\CentCMS\Backend\Models\CategoryModel;
use LightCloud\Com\Protos\CentCMS\Enums\CategoryStatus;

class CategoryRepository
{
    private static $table = 'category';

    public function __construct()
    {
        // self::$table = CategoryModel::newInstance()->getSource();
    }

    public function add(string $name, string $identity, int $parentId, int $status = 0, string $desc = "", int $sortNo = 0): int
    {
        $model = new CategoryModel();
        $model->identity = $identity;
        $model->setUniqueKeys(['identity']);
        if ($exists = $model->exists()) {
            throw new \Exception("节点identity: $identity 已存在");
        }
        $parent = CategoryModel::findFirst($parentId);
        if ($parent) {
            $conn = $model->getWriteConnection();
            $conn->begin();
            $rst = $conn->execute(
                'UPDATE ' . $model->getSource() . ' SET lft = lft + 2 WHERE lft > ?',
                [intval($parent->rgt)]
            );
            if (!$rst) {
                $conn->rollback();
                return 0;
            }

            $rst = $conn->execute(
                'UPDATE ' . $model->getSource() . ' SET rgt = rgt + 2 WHERE rgt>= ?',
                [intval($parent->rgt)]
            );
            if (!$rst) {
                $conn->rollback();
                return 0;
            }
            // 插入节点本身
            $rst = $conn->insertAsDict(
                $model->getSource(),
                [
                    'name'     => $name,
                    'identity' => $identity,
                    'pid'      => $parentId,
                    'depth'    => intval($parent->depth) + 1,
                    'lft'      => intval($parent->rgt),
                    'rgt'      => intval($parent->rgt) + 1,
                    'status'   => $status,
                    'desc'     => $desc,
                    'sort_no'  => $sortNo
                ]
            );
            if (!$rst) {
                $conn->rollback();
                return 0;
            }
            $newId = $conn->lastInsertId();
            return $conn->commit() ? $newId : 0;
        }
        
        throw new \Exception("父节点pid: $parentId 不存在");
    }

    public function delete(int $id): bool
    {
        $node = CategoryModel::findFirst($id);
        if ($node) {
            $conn = $node->getWriteConnection();
            $conn->begin();
            // 删除当前要删除节点及其子节点
            $rst = $conn->delete(
                $node->getSource(),
                "lft >= ? AND rgt <= ?",
                [intval($node->lft), intval($node->rgt)]
            );
            if (!$rst) {
                $conn->rollback();
                return false;
            }
            // 重置被删除节点父节点的左右值
            $offset = $node->rgt - $node->lft + 1;
            // 重新校正所有左边界值大于被删除节点右边界值的节点(一般指创建在被删除节点之后的那些节点)
            $rst = $conn->execute(
                'UPDATE ' . $node->getSource() . ' SET lft = lft - ? WHERE lft > ?',
                [$offset, intval($node->rgt)]
            );
            if (!$rst) {
                $conn->rollback();
                return false;
            }

            // 同上，校正被删除节点父级分类及后来创建分类的右边界值
            $rst = $conn->execute(
                'UPDATE ' . $node->getSource() . ' SET rgt = rgt - ? WHERE rgt > ?',
                [$offset, intval($node->rgt)]
            );
            if (!$rst) {
                $conn->rollback();
                return false;
            }
            return $conn->commit();
        }
    }

    /**
     * 更新节点的值
     *
     * @access public
     * @param array $bind
     * @param array $where
     * @return bool
     */
    public function update(int $id, array $data) : bool
    {
        $conn = di()->getDb();
        $columns = array_flip(CategoryModel::newInstance()->columnMap());
        $mapData = [];
        foreach($data as $key => $val) {
            if(isset($columns[$key])) {
                $mapData[$columns[$key]] = $val;
            }
        }
        $rst = $conn->updateAsDict(
            self::$table,
            $mapData,
            "id = ".$id
        );
        return $rst;
    }

    /**
     * 根据某结点数据取得其子结点数
     *
     * @access public
     * @param int $id
     * @return integer
     */
    public function getChildrenNum(int $id) : int
    {
        $num = 0;
        $node = $this->getOne($id);
        if ($node['depth'] > 0) {
            $num = max(($node['rgt'] - $node['lft'] - 1) / 2, 0);
        }
        return $num;
    }

    /**
     * 获取最大节点深度
     *
     * @access public
     * @return int
     */
    public function getMaxDepth() : int
    {
        $conn = di()->getDbRead();
        $ret = $conn->fetchOne(
            'SELECT depth FROM '.self::$table.' ORDER BY depth DESC LIMIT 1'
        );
        return $ret ? $ret['depth'] : -1;
    }

    /**
     * 取得节点的子节点
     *
     * @param integer $id 节点ID
     * @param integer $depth 获取的子节点深度
     * @param boolean $backward 返回的数据是否包含本身
     * @return array
     */
    public function getChildren(int $id, int $depth, ?array $status, bool $backward = false) : array
    {
        $node = CategoryModel::findFirst($id);
        if ($node) {
            $offsetLft = $node->lft;
            $offsetRgt = $node->rgt;
            $absDepth  = $node->depth + $depth;
            if($backward) {
                --$offsetLft;
                ++$offsetRgt;
                ++$absDepth;
            }
            if(empty($status)) {
                $commaStatus =  CategoryStatus::commaString();
            } else {
                $status = array_filter($status, "is_numeric");
                $commaStatus = implode(",", $status);
            }
            $conn = $node->getWriteConnection();
            $ret = $conn->fetchAll(
                sprintf("SELECT * FROM ".$node->getSource()." WHERE lft > ? AND rgt < ? AND depth < ? AND status IN (%s) ORDER BY lft ASC", $commaStatus),
                \Phalcon\Db::FETCH_ASSOC,
                [
                    $offsetLft, $offsetRgt, $absDepth
                ]
            );
            return $ret ?: [];
        }
        return [];
    }

    /**
     * 获取顶层结点
     *
     * @access public
     * @return array
     */
    public function getTops() : array
    {
        $conn = di()->getDbRead();
        $ret = $conn->fetchAll(
            "SELECT * FROM ".self::$table." WHERE depth = ? ORDER BY lft ASC",
            \Phalcon\Db::FETCH_ASSOC,
            [1]
        );
        return $ret ?: [];
    }

    /**
     * 取得节点的父节点
     *
     * @access public
     * @param integer $id
     * @return array
     */
    public function getParents(int $id) : array
    {
        $node = CategoryModel::findFirst($id);
        if (!$node) {
            throw new \Exception("节点ID: {$id} 不存在");
        }
        $conn = $node->getWriteConnection();
        $ret = $conn->fetchAll(
            "SELECT * FROM ".$node->getSource()." WHERE lft < ? AND rgt > ? AND depth > 0 ORDER BY lft ASC",
            \Phalcon\Db::FETCH_ASSOC,
            [
                $node->lft,
                $node->rgt,
            ]
        );
        return $ret ?: [];
    }

    /**
     * 取得节点上一个父节点
     *
     * @access public
     * @param integer $id
     * @return array
     */
    public function getParent(int $id) : array
    {
        $node = CategoryModel::findFirst($id);
        if (!$node) {
            throw new \Exception("节点ID: {$id} 不存在");
        }
        $node = $this->getOne($id);
        $conn = $node->getWriteConnection();
        $ret = $conn->fetchOne(
            "SELECT * FROM ".$node->getSource()." WHERE lft < ? AND rgt > ? AND depth > 0 ORDER BY lft DESC LIMIT 1",
            \Phalcon\Db::FETCH_ASSOC,
            [
                $node->lft,
                $node->rgt,
            ]
        );
        return $ret ?: [];
    }

    /**
     * 节点是否存在
     *
     * @param integer $id
     * @return boolean
     */
    public function has(int $id) : bool
    {
        $node = $this->getOne($id);
        return !empty($node);
    }

    /**
     * 查询某结点是否存在子结点
     *
     * @access public
     * @param integer $id
     * @return bool
     */
    public function hasChildren(int $id) : bool
    {
        $conn = di()->getDbRead();
        $ret = $conn->fetchOne(
            "SELECT COUNT(*) AS count FROM ".self::$table." WHERE pid = ?",
            \Phalcon\Db::FETCH_ASSOC,
            [
                $id
            ]
        );
        return ($ret ? $ret['count'] : 0) != 0;
    }

    /**
     * 根据ID获取相应的分类项
     *
     * @access public
     * @param array[int] $ids
     * @return array
     */
    public function get(array $ids)
    {
        $conn = di()->getDbRead();
        $ret = $conn->fetchAll(
            sprintf("SELECT * FROM ".self::$table." WHERE id IN (%s)", implode(",", $ids)),
            \Phalcon\Db::FETCH_ASSOC
        );
        return $ret ?: [];
    }

    /**
     * 取单个分类节点数据
     *
     * @access public
     * @param integer $id
     * @return array
     */
    public function getOne(int $id): array
    {
        $conn = di()->getDbRead();
        $node = $conn->fetchOne(
            "SELECT * FROM ".self::$table." WHERE id = :id",
            \Phalcon\Db::FETCH_ASSOC,
            [
                "id" => $id
            ]
        );
        return $node ?: [];
    }

    public function getRootNode() : array
    {
        $conn = di()->getDbRead();
        $ret = $conn->fetchOne(
            "SELECT * FROM ".self::$table." WHERE depth = 0 ORDER BY lft ASC",
            \Phalcon\Db::FETCH_ASSOC
        );
        return $ret ?: [];
    }

    public function getRootId() : int
    {
        $root = $this->getRootNode();
        if($root) {
            return $root['id'];
        }
        return 0;
    }
}
