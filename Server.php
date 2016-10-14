<?php
require_once "./Service/autoload.php";
Autoloader::register();
class Server{
	private static $instance = null;

	public static function getInstance(){
		$name = isset($_REQUEST['s'])?$_REQUEST['s'] : 'IndexService';
       if(empty(self::$instance)){
       	    try{
       	    	self::$instance = new $name;
       	    }catch(Exception $e){
       	    	die("ERROR::error found!");
       	    }
		}
		self::run();
	}

	public static function run(){
		$yar_server = new Yar_Server(self::$instance);
 		$yar_server->handle();
	}
}
Server::getInstance();
?>