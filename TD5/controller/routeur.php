<?php
require_once '/home/ann2/rouree/public_html/PHP/TD-PHP/TD5/lib/File.php';
require_once (File::build_path(array("controller", "ControllerVoiture.php")));
// On recupère l'action passée dans l'URL
$action = /*"readAll"*/$_GET['action'];
// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action(); 
?>
