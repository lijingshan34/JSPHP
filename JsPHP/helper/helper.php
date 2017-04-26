<?php
/**
 * Created by PhpStorm.
 * User: 27394
 * Date: 2016/11/11
 * Time: 9:02
 */
// 加载我们的配置
function load(){// 循环加载全部的库文件，
    $config = include ROOT_PATH."/JsPHP/config/includelist.php";
    foreach($config as $k => $v){
        include LIB_PATH.$v;
    }
}

/**
 * @param $model User
 * @return mixed new \jingshan\UserModel();
 * 第一：包含 UserModel 文件
 * 第二：new 一下下
 * url/index.php?contoller=index&method=index
 * route 找到对应位置， $obj->$method
 */
function M($model){//User
    $model = ucfirst($model);
    include ROOT_PATH.'/application/Model/'.$model.'Model.class.php';
    $class = '\\jingshan\\'.$model.'Model'; // \jingshan\UserModel
    return new $class();// 返回了一个实例化 不需要在此初始化了
}// 输入 User