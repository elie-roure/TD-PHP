<?php 

/**
 * 
 */
class Model{

	public static $pdo
	
	public static function Init(){
		$pdo = new PDO("mysql:host=$hostname;dbname=$database_name",$login,$password);


	}
}




 ?>