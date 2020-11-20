<?php
//require_once '/opt/lampp/htdocs/TD-PHP/TD7/TD5/lib/File.php';
require_once '/opt/lampp/htdocs/TD-PHP/TD7/lib/File.php';
require_once (File::build_path(array("controller", "ControllerVoiture.php")));
//require_once File::build_path(array("controller", "ControllerUtilisateur.php"));
//require_once File::build_path(array("controller", "ControllerTrajet.php"));

// On recupère l'action passée dans l'URL

if (isset($_COOKIE["preference"])){
    $controller_default = $_COOKIE["preference"];
}
else{
    $controller_default = "voiture";
}

if (!isset($_GET["controller"])){
    $controller = $controller_default;
}
else{
    $controller = $_GET["controller"];
}


if (!class_exists("Controller" . ucfirst($controller))){
    $action = "error";  
    $controller_class = "ControllerVoiture";
}
else{
    $controller_class = "Controller" . ucfirst($controller);
}

if (!isset($_GET['action'])) {
	$action = "readAll";
}else $action = $_GET['action'];
// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action(); 
?>
