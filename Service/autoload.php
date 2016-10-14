<?php
class Autoloader{
    /**
     * 向PHP注册在自动载入函数
     */
    public static function register(){
        spl_autoload_register(array(new self, 'autoload'));
    }

    /**
     * 根据类名载入所在文件
     */
    public static function autoload($className){
        $path = realpath(dirname(__FILE__)."/../Service/");
        $class_file = $path.DIRECTORY_SEPARATOR.$className.".php";
        if(file_exists($class_file)){
        	require_once $class_file;
        }else{
        	throw new Exception("<br/>Error::".$className." is not found!");
        }
    }
}