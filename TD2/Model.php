<?php 

require_once('Conf.php')

/**
 * 
 */
class Model{

	public static $pdo
	
	public static function Init(){
		self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name",$login,$password);


	}
}




 ?>