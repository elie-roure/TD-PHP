<?php
require_once ('../model/ModelVoiture.php'); // chargement du modèle
class ControllerVoiture {
	public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../view/voiture/list.php');  //"redirige" vers la vue
    }

    public static function read(){
    	$immat = $_GET['immat'];
    	$v = ModelVoiture::getVoitureByImmat($immat);
    	if ($v == null) {
    		require ('../view/voiture/error.php');
    	}else {
    		require ('../view/voiture/detail.php');
    	}
<<<<<<< HEAD
    }

    public static function create(){
        require ('../view/voiture/create.php');
    }

    public static function created(){
        $immat = $_GET['immat'];
        $marque = $_GET['marque'];
        $couleur = $_GET['couleur'];



        $v = new ModelVoiture($marque,$couleur,$immat);
        $v->save();
        ControllerVoiture::readAll();
=======
>>>>>>> b35b65b364fa72888dc1e834d56d021f96e90086
    }
}
