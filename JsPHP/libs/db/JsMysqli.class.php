<?php
/**
 * Created by PhpStorm.
 * User: 27394
 * Date: 2016/11/10
 * Time: 17:07
 */
namespace jingshan;

class JsMysqli{
    private static $_instance = null;// 类实例化句柄
    private $conn;// Mysqli 实例化句柄
    private $table = '';// 表名
    private $Sysconfig = array(// 配置数据
        'hosts'=>'',
        'user'=>'',
        'pwd'=>'',
        'dbname'=>''
    );
    private function __construct($config){// 构造函数
        if(is_array($config)){
            $this->Sysconfig = array_merge($this->Sysconfig,$config);
            $this->conn = new \Mysqli($this->Sysconfig['hosts'],$this->Sysconfig['user'],$this->Sysconfig['pwd'],$this->Sysconfig['dbname']);
            $this->conn->set_charset('utf8');
        }
    }
    public static function getInstance($config){//单例初始化
        if(is_null(self::$_instance)){
            self::$_instance = new self($config);
        }
        return self::$_instance;
    }

    public function table($table){// 设置表名
        $this->table = $table;
        return $this;
    }
    private function changeCondtion($condtion){// 转换条件 到 where
        $where_array = array();
        foreach($condtion as $k =>$v){
            $tmp = '';
            if(is_array($v)){
                if($v[0]=='like'){
                    $tmp = "$k $v[0] '%$v[1]%'";
                }else{
                    $tmp = "$k $v[0] '$v[1]'";
                }
            }
            if(is_string($v)){
                $tmp = "$k = '$v'";
            }
            $where_array[] = $tmp;
        }
        $where = implode(" AND ",$where_array);
        return $where?$where:1;
    }
    public function select($condtion){// 获取查询结果
        $where = $this->changeCondtion($condtion);
        $sql = "select * from $this->table where $where";
        $result = $this->conn->query($sql);
        $ret = array();
        while($row = $result->fetch_assoc()){
            $ret[] = $row;
        }
        return $ret;
    }
    public function add($data){// 新增数据
        $fileds_array = array();
        $values_array = array();
        foreach($data as $k => $v){
            $fileds_array[] = "`$k`";
            $values_array[] = "'$v'";// $v = 123  $v = zhang san li si
        }
        $fileds = implode(',',$fileds_array);
        $values = implode(',',$values_array);;
        $sql = "INSERT INTO `$this->table` ($fileds) VALUES ( $values )";
        $this->conn->query($sql);
    }
    public function update($data,$id){// 更新数据
        $str_array = array();
        foreach($data as $k => $v){
            $str_array[] = "$k = '$v'";
        }
        $str = implode(',',$str_array);
        $primaryKey = 'id';
        $sql = "UPDATE `$this->table` SET $str WHERE $primaryKey = $id";
        $this->conn->query($sql);
    }
    public function del($id){// 删除数据
        $primaryKey = 'id';
        $sql = "DELETE FROM `$this->table` WHERE `$primaryKey` = '$id'";
        $this->conn->query($sql);
    }
}