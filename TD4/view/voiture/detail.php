<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Detail voiture</title>
</head>
<body>

	<?php
	echo " 
	<ul>
		<li>Marque : " . $v->getMarque() . "</li>
		 <li>Couleur : " . $v->getCouleur() . "</li>
		 <li>Immatriculation : " . $v->getImmatriculation() . "</li>
	</ul>";
	?>
</body>
</html>
