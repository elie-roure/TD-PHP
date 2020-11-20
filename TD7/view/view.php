<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> <?php echo $pagetitle; ?> </title>

	<nav>
		<ul>
			<li style="display: initial;"><a href="index.php?action=readAll">Liste des voitures</a></li>
			<li style="display: initial;"><a href="index.php?action=readAll&controller=utilisateur">Liste des utilisateurs</a></li>
			<li style="display: initial;"><a href="index.php?action=readAll&controller=trajet">Liste des trajets</a></li>
			<li style="display:initial;"><a href = preference.html> Preferences</a></li>
		</ul>
	</nav>

</head>
<body>
	
	<?php
	// Si $controleur='voiture' et $view='list',
	// alors $filepath="/chemin_du_site/view/voiture/list.php"

	$filepath = File::build_path(array("view", $controller, "$view.php"));
	require $filepath;
	
	?>
</body>
<footer>
	<p style="border: 1px solid black;text-align:right;padding-right:1em;">
		Site de covoiturage de Roure Elie
	</p>


</footer>
</html>

