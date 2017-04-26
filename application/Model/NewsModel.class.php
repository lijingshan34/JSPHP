<?php
/**
 * Created by PhpStorm.
 * User: 27394
 * Date: 2016/11/11
 * Time: 11:18
 */
// thinkphp 数据获取 都封装到 MODEL 层里面
namespace jingshan; // php5.3 后，锻炼
class NewsModel extends DB{// DB 统一的入口 include DB
    // 获取列表的方法
    // UserModel DB select() 都有
    private $table = 'js_news';// 点
    public function getList($condtion=array()){
        // 执行多表联合查询
        return self::select($this->table,$condtion);
    }
}
