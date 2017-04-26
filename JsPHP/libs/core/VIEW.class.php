<?php
/**
 * Created by PhpStorm.
 * User: 27394
 * Date: 2016/11/10
 * Time: 17:07
 */
namespace jingshan;
class VIEW {

    public static $view;
    // 初始化设置配置项目
    public static function init($viewtype,$config){
//		self::$view = new \jingshan\$viewtype;
        $class = '\\'.$viewtype;
        self::$view = new $class;
        self::$view->setTemplateDir('./application/templates/');
        self::$view->setCompileDir('./runtime/templates_c/');
        self::$view->setConfigDir('./runtime/configs/');
        self::$view->setCacheDir('./runtime/cache/');

        foreach($config as $key=>$value){
            self::$view -> $key = $value;
        }

    }
    // 循环赋值
    public static function assign($data){
        foreach($data as $key=>$value){
            self::$view->assign($key, $value);
        }
    }
    // 显示对应的模版
    public static function display($template){
        self::$view->display($template);
    }
}