<?php
class Voiture {

  private $marque;
  private $couleur;
  private $immatriculation;

  // un getter      
  public function getMarque() {
   return $this->marque;  
 }

 public function getCouleur(){
  return $this->couleur;
}

public function getImmatriculation(){
  return $this->immatriculation;
}

  // un setter 
public function setMarque($marque2) {
 $this->marque = $marque2;
}

public function setCouleur($couleur2) {
 $this->couleur = $couleur2;
}

public function setImmatriculation($immatriculation2) {
  if (strlen("$immatriculation2")==8) {
    $this->immatriculation = $immatriculation2;
  }
  
}

  // un constructeur
public function __construct($m = NULL, $c = NULL, $i = NULL) {
  if (!is_null($m) && !is_null($c) && !is_null($i)) {
    // Si aucun de $m, $c et $i sont nuls,
    // c'est forcement qu'on les a fournis
    // donc on retombe sur le constructeur à 3 arguments
    $this->marque = $m;
    $this->couleur = $c;
    $this->immatriculation = $i;
  }
}
  // une methode d'affichage.
public function afficher() {
  echo "<p>Voiture $this->immatriculation de marque $this->marque (couleur $this->couleur)</p> ";
}


public function getAllVoitures(){
  $rep = (Model::$pdo)->query("Select * From voiture");
  $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
  $tab_voit = $rep->fetchAll();
  return $tab_voit;
}
}
?>

