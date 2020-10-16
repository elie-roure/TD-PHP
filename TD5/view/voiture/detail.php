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
	<li>Marque : " .  htmlspecialchars($v->getMarque()) . "</li>
	<li>Couleur : " .  htmlspecialchars($v->getCouleur()) . "</li>
	<li>Immatriculation : " .  htmlspecialchars($v->getImmatriculation()) . "</li>
	</ul>";
	?>
</body>
</html>
