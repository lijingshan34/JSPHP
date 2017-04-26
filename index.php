<?php
/**
 * Created by PhpStorm.
 * User: 27394
 * Date: 2016/11/10
 * Time: 17:06
 */
namespace jingshan;
include "JsPHP/jsmvc.php";// 包含框架入口文件
$app = new JSMVC(true);// true代表 现实调试信息
$app->init();// 执行 初始化程序