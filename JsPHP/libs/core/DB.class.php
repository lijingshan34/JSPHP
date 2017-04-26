<?php
/**
 * Created by PhpStorm.
 * User: 27394
 * Date: 2016/11/10
 * Time: 17:07
 */
namespace jingshan;
class DB{
    static public $db = null;
    static public function init($dbtype,$config){// 初始化 真实的数据库连接，
        $dbtype = '\\jingshan\\'.$dbtype;
        self::$db =  $dbtype::getInstance($config);
    }
    static public function select($table,$condtion){// 选择数据
        return self::$db->table($table)->select($condtion);
    }
    static public function add($table,$data){//新增数据
        self::$db->table($table)->add($data);
    }
    static public function update($table,$data,$id){// 更新数据
        self::$db->table($table)->update($data,$id);
    }
    static public function del($table,$id){//删除数据
        self::$db->table($table)->del($id);
    }
}