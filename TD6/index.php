<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$ROOT_FOLDER = __DIR__;
	$DS = DIRECTORY_SEPARATOR;
	require_once "$ROOT_FOLDER". "$DS" ."lib". "$DS". "File.php";
	require_once (File::build_path(array("controller", "routeur.php")));;
	?>

</body>
</html>