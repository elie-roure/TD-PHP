<?php
require_once (File::build_path(array("model", "ModelVoiture.php")));
//require_once ('../model/ModelVoiture.php'); // chargement du modèle
class ControllerVoiture {
	public static function readAll() {

    $tab_v = ModelVoiture::getAllVoitures(); 
    $pagetitle = 'Liste des voitures';
    $view = 'list';
    $controller = 'voiture';    //appel au modèle pour gerer la BD
    require (File::build_path(array("view", "view.php")));
        //require ('../view/voiture/list.php');  //"redirige" vers la vue
  }

  public static function read(){

   $immat = $_GET['immat'];

   $pagetitle = $immat;

   $v = ModelVoiture::getVoitureByImmat($immat);
   if ($v == null) {
    $view = 'error';
    $controller = 'voiture';
    require (File::build_path(array("view", "view.php")));
    		//require ('../view/voiture/error.php');
  }else {
    $view = 'detail';
    $controller = 'voiture';
    require (File::build_path(array("view", "view.php")));
          // require ('../view/voiture/detail.php');
  }

}

public static function delete(){
  $tab_v = ModelVoiture::getAllVoitures();
  $immat = $_GET['immat'];

  $pagetitle = $immat;

  $v = ModelVoiture::getVoitureByImmat($immat);
  if ($v == null) {
    $view = 'error';
    $controller = 'voiture';
    require (File::build_path(array("view", "view.php")));
  }else {
    ModelVoiture::deleteByImmat($immat);
    $view = 'deleted';
    $controller = 'voiture';
    require (File::build_path(array("view", "view.php")));
          // require ('../view/voiture/detail.php');
  }

}

public static function create(){
  $pagetitle = 'Creation Voiture';
  $view = 'create';
  $controller = 'voiture';
  require (File::build_path(array("view", "view.php")));
    //require ('../view/voiture/create.php');
}

public static function created(){
  $immat = $_GET['immat'];
  $marque = $_GET['marque'];
  $couleur = $_GET['couleur'];



  $v = new ModelVoiture($marque,$couleur,$immat);
  $v->save();

  $tab_v = ModelVoiture::getAllVoitures(); 

  $pagetitle = 'Voiture créée';
  $view = 'created';
  $controller = 'voiture';
  require (File::build_path(array("view", "view.php")));


}
public function update($data){

  $sql = "UPDATE Voiture
  SET couleur=:tag_couleur, marque=:tag_marque
  WHERE immatriculation=:imma_tag";
  $req_prep = Model::$pdo->prepare($sql);
  $values = array(
    "imma_tag" => $data['immat'],
    "tag_marque" => $data['marque'],
    "tag_couleur" => $data['couleur'],
  );
  $req_prep->execute($values);

}

public static function error(){
  $pagetitle='Erreur';
  $controller='voiture';
  $view='error';

  require (File::build_path(array("view", "view.php")));         
}
}
