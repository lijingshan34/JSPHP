<?php
/**
 * Created by PhpStorm.
 * User: 27394
 * Date: 2016/11/11
 * Time: 11:18
 */
// thinkphp 数据获取 都封装到 MODEL 层里面
namespace jingshan; // php5.3 后，锻炼
// 第一： 命名空间，基本上 都需要写在 整这个 文件的 最顶部 前面不能有任何可以执行代码，注释可以
// 相当于一个虚拟 文件夹， 所有的类，同处于这个 虚拟文件夹下
// 使用：
// 如果说，你的 class 在当前的这个 namespace
// 可以 $usr = new UserModel(); 找到的位置，
// 类似于 $user = new jingshan\UserModel();
// 如果说是用 字符串拼接： $class = UserModel()
// $db = new $class(); --->改变： $class = '\\jingshan\\'.UserModel
// $db = new $class(); ==> $db => new \jingshan\UserModel();
// 另外：new  ::
// new 实例化， 自动调用函数里面的 __construct() 方法
// :: 静态的属性，或者静态方法一个调用。
// 如果说你要实例化，或者静态方法调用，那些不在我们 命名空间内，
// 比如 我们的 Smarty, 比如 系统 Mysqli  new Smarty();
// 使用 new \Smarty() 或者 new \Mysqli(); 就可以。
// 实在都记不住， 一层命名空间的时候，
// new UserModel();------》当前的
// new \jingshan\UserModel();----> 虚拟跟 文件夹下的
// new jingshan\UserModel();--->当前命名空间下的
// new \UserModel();-----> 系统的，不在我们命名空间内的
class UserModel extends DB{// DB 统一的入口 include DB
    // 获取列表的方法
    // UserModel DB select() 都有
    private $table = 'js_user';// 点
    public function getList($condtion=array()){
        // 执行多表联合查询
        return self::select($this->table,$condtion);
    }
    public function add_user(){
        $data = array('username'=>'jingshan33','pwd'=>'123123');
        self::add($this->table,$data);
    }
}
