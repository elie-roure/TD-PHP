<?php 
require_once('Model.php');
require_once('Voiture.php');

Model::Init();

$rep = (Model::$pdo)->query("Select * From voiture");

$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
foreach($tab_obj as $value){
	print_r($value);
	echo "</br>";
}

/*$rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
$tab_voit = $rep->fetchAll();
foreach ($tab_voit as $value) {
	echo $value->afficher();
	echo "</br>";
}*/

?>