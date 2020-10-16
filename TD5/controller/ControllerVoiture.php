<?php
require_once (File::build_path(array("model", "ModelVoiture.php")));
//require_once ('../model/ModelVoiture.php'); // chargement du modèle
class ControllerVoiture {
	public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require (File::build_path(array("view", "voiture", "list.php")));
        //require ('../view/voiture/list.php');  //"redirige" vers la vue
    }

    public static function read(){
    	$immat = $_GET['immat'];
    	$v = ModelVoiture::getVoitureByImmat($immat);
    	if ($v == null) {
            require (File::build_path(array("view", "voiture", "error.php")));
    		//require ('../view/voiture/error.php');
        }else {
           // require (File::build_path(array("view", "voiture", "detail.php")));
          require ('../view/voiture/detail.php');
      }

  }

  public static function create(){
    require (File::build_path(array("view", "voiture", "create.php")));
    //require ('../view/voiture/create.php');
}

public static function created(){
    $immat = $_GET['immat'];
    $marque = $_GET['marque'];
    $couleur = $_GET['couleur'];



    $v = new ModelVoiture($marque,$couleur,$immat);
    $v->save();
    ControllerVoiture::readAll();

}
}
