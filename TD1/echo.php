<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
          /*// Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */
           
          // On met la chaine de caractères "hello" dans la variable 'texte'
          // Les noms de variable commencent par $ en PHP
          $texte = "hello world !";

          // On écrit le contenu de la variable 'texte' dans la page Web
          /*echo $texte;

          $prenom = "Marc";

echo "Bonjour " . $prenom;
echo "Bonjour $prenom";
echo 'Bonjour $prenom';

echo $prenom;
echo "$prenom";*/
          //$voitures = array();
          
          $voitures = array(
            'marque' => 'Seat',
            'couleur' => 'Gris',
            'immatriculation' => 'GH 584 HB' );

          echo "<h1>Liste des voitures : </h1>";
          if (empty($voitures)) {
            echo "Il n'y a aucune voiture.";
          }
          echo "<ul>";
          foreach ($voitures as $key => $value) {
            echo "<li>$key : $value</li>";
            # code...
          }
          
          echo "</ul>";
         // var_dump($voitures);
          /*$marque = "Seat";
          $couleur = "Gris";
          $immatriculation = "GH 584 HB";

          echo "<p>Voiture $immatriculation de marque $marque (couleur $couleur)</p>";*/


        ?>
    </body>
</html> 