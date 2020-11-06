<?php
require_once '/home/ann2/rouree/public_html/PHP/TD-PHP/TD6/lib/File.php';
require_once (File::build_path(array("controller", "ControllerVoiture.php")));
// On recupère l'action passée dans l'URL

if (!isset($_GET['action'])) {
	$action = "readAll";
}else if (!in_array($_GET['action'],get_class_methods(ControllerVoiture))) {
	$action = 'error';
}else $action = /*"readAll"*/$_GET['action'];

// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action(); 
?>
