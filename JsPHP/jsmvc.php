<?php
/**
 * Created by PhpStorm.
 * User: 27394
 * Date: 2016/11/10
 * Time: 17:08
 */
namespace jingshan;
define("ROOT_PATH",dirname(dirname(__FILE__)));
define("APP_PATH",ROOT_PATH.'/application/Controller/');
define("LIB_PATH",ROOT_PATH.'/JsPHP/libs');
// 包含全部文件
include ROOT_PATH."/JsPHP/helper/helper.php"; // 外包形式，包含所有的文件
// 创建的类
class JSMVC{
    // 调试部署
    private $time_start ;
    private $memory_start;
    private $debug;
    // 原始文件
    private $sysConfig = array();
    public function route(){
        $controller = isset($_GET['controller'])?ucfirst($_GET['controller']):'Index';
        $method = isset($_GET['method'])?$_GET['method']:"index";
        $controller = ucfirst($controller);

        // 包含 楼号的文件，动态加载
        include APP_PATH.$controller."Controller.class.php";
        $class = '\\jingshan\\'.$controller.'Controller';
        $obj = new $class();
        $obj->$method();
    }
    public function db(){
        DB::init('JsMysqli',$this->sysConfig['dbconfig']);
    }
    public function view(){
        VIEW::init('Smarty',$this->sysConfig['viewconfig']);
    }
    public function getConfig(){
        $sysConfig = include ROOT_PATH."/JsPHP/config/config.php";
        $appConfig = include ROOT_PATH."/application/config/config.php";
        $this->sysConfig = array_merge($sysConfig,$appConfig);
    }
    public function init(){
        //帮助初始化
        load();// 库文件 加载完成
        $this->getConfig();// 获取配置文件
        // 系统初始化
        $this->db();
        $this->view();
        $this->route();
    }

    // 调试新增
    public function __construct($debug=false){
        $this->debug  = $debug;
        $this->time_start = $this->getMillisecond();
        $this->memory_start = memory_get_usage();
    }

    /**
     * 毫秒处理函数
     * @return float
     */
    public function getMillisecond() {
        list($t1, $t2) = explode(' ', microtime());// 毫秒 跟秒
        return (float)sprintf('%.0f',(floatval($t1)+floatval($t2))*1000);// 返回运行的毫秒的数据
    }
    /**
     * 对内存跟运行时间进行监控
     */
    public function __destruct(){
        if($this->debug){
            echo "<br/>运行监控<br/>";
            echo "运行耗时:".($this->getMillisecond()-$this->time_start)."毫秒<br/>";
            echo "内存占用:".intval((memory_get_usage()-$this->memory_start)/1024)."K字节<br/>";
        }
    }
// 类结束了
}