<?php
require_once '/home/ann2/rouree/public_html/PHP/TD-PHP/TD6/lib/File.php';
require_once (File::build_path(array("controller", "ControllerVoiture.php")));
// On recupère l'action passée dans l'URL

if (!isset($_GET['action'])) {
	$action = "readAll";
}else $action = /*"readAll"*/$_GET['action'];

if (!in_array($action,get_class_methods(ControllerVoiture)) {
	
}


// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action(); 
?>
