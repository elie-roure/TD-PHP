<?php 
require_once('Model.php');
require_once('Voiture.php');

Model::Init();

$rep = (Model::$pdo)->query("Select * From Voiture");

$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
foreach($tab_obj as $value){
    print_r($value);
    echo "</br>";
}

 ?>