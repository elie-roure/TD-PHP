

	<?php
	
	echo ' 
	<ul>
	<li>Marque : ' .  htmlspecialchars($v->getMarque()) . '</li>
	<li>Couleur : ' .  htmlspecialchars($v->getCouleur()) . '</li>
	<li>Immatriculation : ' .  htmlspecialchars($v->getImmatriculation()) . '</li>
	<li><a href="index.php?action=delete&immat=' . htmlspecialchars($v->getImmatriculation()) . '">Supprimer la voiture</a></li>
	</ul>';
	?>

