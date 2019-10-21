<?php
/**
 * Created by PhpStorm.
 * User: guweigang
 * Date: 16/2/25
 * Time: 18:22
 */

namespace BullSoft;

class Category
{
    /**
     * 表名
     *
     * @access private
     * @var string
     */
    protected $_table;
    /**
     * 数据库对象
     *
     * @access private
     * @var object
     */
    protected $_db;

    protected static $_filterMap = array('id', 'pid', 'lft', 'rgt', 'depth');

    /**
     * 唯一标识列名
     * @var string
     */
    protected $_uniqueColumn;
    /**
     *
     * @colmn
     * @var array
     */
    protected $_column;
    /**
     * 构造器
     *
     * @db object 数据库连接
     * @tableName string 数据表名称
     * @uniqueColumn  string 唯一标识列名
     * @extentionalColumn array 扩展列名（不包括id,pid,lft,rgt,depth，如果包含，会过滤。
     *
     * @access public
     */
    public function __construct($db, $tableName, $uniqueColumn, $extentionalColumn)
    {
        $this->_db = $db;
        $this->_table = $tableName;
        if(!in_array($uniqueColumn, $extentionalColumn)) {
            throw new \Exception("唯一标识列名不在列名中!", 500);
        }
        $this->_uniqueColumn = $uniqueColumn;
        $this->_column = array_diff($extentionalColumn, self::$_filterMap);
    }

    protected function filterColumn($params)
    {
        $filterParams = array();
        foreach($params as $key => $value) {
            if(in_array($key, $this->_column)) {
               $filterParams[$key] = $value;
            }
        }
        return $filterParams;
    }
    /**
     * 增加节点
     *
     * @access public
     * @param integer $pid
     * @param array $params array('columnName' => 'columnValue'...);
     * @return mixed
     */
    public function add($pid, $params)
    {
        $filterColumn = $this->filterColumn($params);
        if(!isset($filterColumn[$this->_uniqueColumn]) || empty($filterColumn[$this->_uniqueColumn])) {
            throw new \Exception("字段{$this->_uniqueColumn}不能为空!", 500);
        }
        //检查分类中是否有同名节点
        $has = $this->hasSameValueByUniquecolumn($params[$this->_uniqueColumn]);
        if($has) {
            throw new \Exception("该分类已存在!", 500);
        }
        if (!$has && $parent = $this->getOne($pid)) {
            try {
                $this->_db->begin();
                //将所有后添加的结点的左值扩展2
                $sql = "UPDATE {$this->_table} SET lft=lft+2 WHERE lft>". intval($parent['rgt']);
                $this->_db->execute($sql);
                //把父分类的所有父级及后添加的结点右边界值扩展2
                $sql = "UPDATE {$this->_table} SET rgt=rgt+2 WHERE rgt>=". intval($parent['rgt']);
                $this->_db->execute($sql);

                $columnsName = '`'.implode('`,`',array_keys($filterColumn)).'`';
               // $columnsValue = "'".implode('\',\'',array_values($filterColumn))."'";
                // 为防止sql注入，字符串类型的都需要使用bind来操作
                $columnsValue = implode(', :', array_keys($filterColumn));
                //新加入节点，本节点的左值为父节点的原右值，右值为左值+1
                //$sql = "INSERT INTO {$this->_table}(pid, depth, lft, rgt, $columnsName) VALUES('{$pid}', '". (intval($parent['depth'])+1). "', '". intval($parent['rgt']). "', '". (intval($parent['rgt'])+1). "',{$columnsValue})";
                $sql = "INSERT INTO {$this->_table}(pid, depth, lft, rgt, $columnsName) VALUES(:pid, :depth, :lft, :rgt, :".$columnsValue.")";
                $parameters = array(
                    'pid' => $pid,
                    'depth' => (intval($parent['depth'])+1),
                    'lft' => intval($parent['rgt']),
                    'rgt' => (intval($parent['rgt'])+1),
                );
                $parameters = array_merge($parameters, $filterColumn);
                $this->_db->execute($sql, $parameters);
                $cid = $this->_db->lastInsertId();
                return $this->_db->commit() ? $cid : false;
            } catch (\Exception $e) {
                $this->_db->rollback();
                throw new \Exception($e->getMessage());
            }
        }
        return $has;
    }
    /**
     * 取单个分类节点数据
     *
     * @access public
     * @param integer $id
     * @return array
     */
    public function getOne($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM {$this->_table} WHERE id={$id}";
        return $this->_db->fetchOne($sql);
    }
    /**
     * 删除节点
     *
     * @access public
     * @param int $id
     * @param array $node
     * @return bool
     */
    public function del($id, $node = array())
    {
        $node || $node = $this->getOne($id);
        if ($node) {
            try {
                $this->_db->begin();
                //删除当前要删除节点及其子节点
                $sql = "delete from {$this->_table} where lft>=". intval($node['lft']). " and rgt<=". intval($node['rgt']);
                $this->_db->execute($sql);
                //重置被删除节点父节点的左右值
                $offset = $node['rgt'] - $node['lft'] + 1;
                //重新校正所有左边界值大于被删除节点右边界值的节点(一般指创建在被删除节点之后的那些节点)
                $sql = "update {$this->_table} set lft=lft-{$offset} where lft>". intval($node['rgt']);
                $this->_db->execute($sql);
                //同上，校正被删除节点父级分类及后来创建分类的右边界值
                $sql = "update {$this->_table} set rgt=rgt-{$offset} where rgt>". intval($node['rgt']);
                $this->_db->execute($sql);
                return $this->_db->commit();
            } catch (\Exception $e) {
                $this->_db->rollback();
                return false;
            }
        }
        return false;
    }
    /**
     * 根据某结点数据取得其子结点数
     *
     * @access public
     * @param int $id
     * @return integer
     */
    public function getChildrenNum($id)
    {
        $num = 0;
        $node = $this->getOne($id);
        if ($node['depth'] > 0) {
            $num = max(($node['rgt'] - $node['lft'] - 1)/2, 0);
        }
        return $num;
    }
    /**
     * 获取最大节点深度
     *
     * @access public
     * @return int
     */
    public function getMaxDepth()
    {
        $sql = "select depth from {$this->_table} order by depth desc limit 1";
        return (int)$this->_db->fetchOne($sql);
    }
    /**
     * 根据ID获取相应的分类项
     *
     * @access public
     * @param array $ids
     * @return array
     */
    public function get($ids)
    {
        is_array($ids) || $ids = array($ids);
        $sql = "select * from {$this->_table} where id in (". implode(',', $ids). ") order by id asc";
        return $this->_db->fetchAll($sql);
    }
    /**
     * 取得节点的子节点
     *
     * @param integer $id 节点ID
     * @param integer $depth 获取的子节点深度
     * @param boolean $backward 返回的数据是否包含本身
     * @return array
     */
    public function getChildren($id, $depth, $backward = false)
    {
        $node = $this->getOne($id);
        $sql = "select * from {$this->_table} where lft>";
        $sql.= ($backward ? '=' : ''). intval($node['lft']);
        $sql.= ' and rgt<'. ($backward ? '=' : ''). intval($node['rgt']);
        $sql.= ' and depth'. ($backward ? '<' : ''). '='. (intval($node['depth']) + $depth);
        $sql.= ' order by lft asc';
        return $this->_db->fetchAll($sql);
    }
    /**
     * 获取顶层结点
     *
     * @access public
     * @return array
     */
    public function getTops()
    {
        $sql = "select * from {$this->_table} where depth = 1 order by lft asc";
        return $this->_db->fetchAll($sql);
    }
    /**
     * 取得节点的父节点
     *
     * @access public
     * @param integer $id
     * @return array
     */
    public function getParents($id)
    {
        $id = intval($id);
        $node = $this->getOne($id);
        $sql = "SELECT * FROM {$this->_table} WHERE lft < ". intval($node['lft']). " AND rgt > ". intval($node['rgt']). " AND depth > 0 ORDER BY lft ASC";
        return $this->_db->fetchAll($sql);
    }
    /**
     * 取得节点上一个父节点
     *
     * @access public
     * @param integer $id
     * @return array
     */
    public function getParent($id)
    {
        $node = $this->getOne($id);
        $sql = "SELECT * FROM {$this->_table} WHERE lft < ". intval($node['lft']). " AND rgt > ". intval($node['rgt']). " ORDER BY lft DESC limit 1";
        return $this->_db->fetchOne($sql);
    }
    /**
     * 节点是否存在
     *
     * @param integer $id
     * @return int
     */
    public function has($id)
    {
        $sql = "SELECT COUNT(*) AS count FROM {$this->_table} WHERE id = ". intval($id);
        $result = $this->_db->fetchOne($sql);
        return $result['count'];
    }
    /**
     * 查询某结点是否存在子结点
     *
     * @access public
     * @param integer $id
     * @return integer
     */
    public function hasChildren($id)
    {
        $sql = "SELECT COUNT(*) AS count FROM {$this->_table} WHERE pid = ". intval($id);
        $result = $this->_db->fetchOne($sql);
        return $result['count'];
    }
    /**
     * 判断是否存在某名称的子节点
     *
     * @access public
     * @param string $uniqueColumnValue
     * @return integer
     */
    public function hasSameValueByUniquecolumn($uniqueColumnValue)
    {
        $sql = "SELECT id FROM {$this->_table} WHERE {$this->_uniqueColumn} = :uniqueColumnValue";
        $parameters = array(
            'uniqueColumnValue' => $uniqueColumnValue,
        );
        return $this->_db->fetchOne($sql, \Phalcon\Db::FETCH_ASSOC, $parameters);
    }
    /**
     * 更新节点的值
     *
     * @access public
     * @param array $bind
     * @param array $where
     * @return bool
     */
    public function update($id, array $bind)
    {
        $sql = "UPDATE {$this->_table} SET ";
        foreach ($bind as $k=> $v) {
            //$sql .= "{$k} = ". (is_string($v) ? "'{$v}'" : intval($v)). ", ";
            $sql .= "`{$k}` = :{$k}, ";
        }
        $sql = rtrim($sql, ", ");
        $sql .= " WHERE id = ". intval($id);
        return is_integer($this->_db->execute($sql, $bind));
    }

    public function getRootNode()
    {
        $sql = "select * from {$this->_table} where depth = 0 order by lft asc";
        return $this->_db->fetchOne($sql);
    }

    public function getRootId()
    {
        $root = $this->getRootNode();
        if($root != false) {
            return $root['id'];
        }
        return false;
    }

    /*
     * 移植并修改节点的值
     *
     */
    public function transfer($id, $newParentId, $params)
    {
        $id = intval($id);
        if($id == $newParentId) {
            throw new \Exception("不能将当前节点作为当前节点的父节点!", 500);
        }

        $filterColumn = $this->filterColumn($params);
        //如果参数过滤
        $updateArray = array();
        if(!empty($filterColumn)) {
            foreach($filterColumn as $key => $value) {
                //$updateArray[] = " `{$key}` = '{$value}'";
                $updateArray[] = " `{$key}` = :{$key}";
            }
        }

        $allParents = $this->getParents($newParentId);
        if(is_array($allParents) && !empty($allParents)) {
            foreach($allParents as $oneParent) {
                if($oneParent['id'] == $id) {
                    throw new \Exception("不能将当前节点的子节点作为父节点!", 500);
                }
            }
        }
        try {
            $this->_db->begin();
            if(!empty($updateArray)) {
                //修改参数
                $updateSql = "update {$this->_table} set ".implode(" , ",$updateArray)." where id = {$id}";
                $this->_db->execute($updateSql, $filterColumn);
            }
            //获取当前节点
            $node = $this->getOne($id);
            if($node == false) {
                throw new \Exception("未找到当前节点!", 500);
            }
            if($node['pid'] == $newParentId) {
                //如果当前节点的父节点和新父节点是同一个节点，则不需要移植
                return $this->_db->commit();
            }
            //检查中是否有同名节点
            $has = $this->hasSameValueByUniquecolumn($node[$this->_uniqueColumn]);
            if($has) {
                if($has['id'] != $id) {
                    throw new \Exception("该分类已存在!", 500);
                }
            }
           //获取当前节点及其子节点的所有id
            $sql = "select id from {$this->_table} where lft >= {$node['lft']} and rgt <= {$node['rgt']}";
            $result = $this->_db->fetchAll($sql);

            //子节点的id
            $nodeChildrenIds = array();
            foreach($result as $value) {
               $nodeChildrenIds[] = $value['id'];
            }

            $childIds = implode(",",$nodeChildrenIds);

            //获取当前节点右值与左值的差值
            $offset = $node['rgt'] - $node['lft'] + 1;

            //重置旧父节点的左右值
            //重新校正所有左边界值大于被删除节点右边界值的节点(一般指创建在被删除节点之后的那些节点)
            $sql = "update {$this->_table} set lft=lft-{$offset} where lft>". intval($node['rgt']);
            $this->_db->execute($sql);
            //同上，校正被删除节点父级分类及后来创建分类的右边界值
            $sql = "update {$this->_table} set rgt=rgt-{$offset} where rgt>". intval($node['rgt']);
            $this->_db->execute($sql);

            //获取当前节点的新父节点(去掉当前节点后的结果)
            $newParentNode = $this->getOne($newParentId);
            if($newParentNode == false) {
                throw new \Exception("未找到父节点!", 500);
            }

            $nodeOffset = $newParentNode['rgt'] - $node['lft'];
            $depthOffset = $newParentNode['depth']+1 - $node['depth'];//深度差


            //修改当前节点及其子节点的左右值, 以及深度
            $sql = "update {$this->_table} set lft=lft+{$nodeOffset}, rgt=rgt+{$nodeOffset}, depth=depth+{$depthOffset} where id in ({$childIds})";
            $this->_db->execute($sql);

            //更新新的父节点添加当前节点作为孩子节点后的左值
            $sql = " update {$this->_table} set lft = lft+{$offset} where lft >". intval($newParentNode['rgt']). " and id not in (".$childIds.")";
            $this->_db->execute($sql);

            //更新新的父节点添加当前节点作为孩子节点后的右值
            $sql = " update {$this->_table} set rgt = rgt+{$offset} where rgt >=". intval($newParentNode['rgt'])." and id not in (".$childIds.")";
            $this->_db->execute($sql);

            //更新当前节点的父节点为新的父节点
            $sql = " update {$this->_table} set pid = {$newParentId} where id = {$id}";
            $this->_db->execute($sql);

            return $this->_db->commit();
        } catch(\Exception $e) {
            $this->_db->rollback();
            throw $e;
        }

    }
}
