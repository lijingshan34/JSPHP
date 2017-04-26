<?php
/**
 * Created by PhpStorm.
 * User: 27394
 * Date: 2016/11/10
 * Time: 17:07
 */
namespace jingshan;
class IndexController{
    public function index(){
        // 测试插入数据
        $dbuser = M('User');// 实例化 UserModel 类
        $dbuser->add_user();// 插入数据
        $user = $dbuser->getList();// 获取全部的用户信息
        $news = M('News')->getList();// 获取全部的新闻信息
        // 整理数据
        $data = array(
            'user'=>$user,
            'news'=>$news
        );
        // 显示数据
        VIEW::assign($data);
        VIEW::display('Index/index.html');
    }
}