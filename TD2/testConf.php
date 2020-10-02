<!DOCTYPE html>
<html>
<head>
	<title>testConf</title>
</head>
<body>
	<?php
	require_once('Conf.php');

	$conf1 = new Conf();
	echo $conf1->getLogin();

	echo Conf::getLogin(); 
	echo Conf::gethostname();
	echo Conf::getPassword();
	echo Conf::getDatabase();


	?>

</body>
</html>