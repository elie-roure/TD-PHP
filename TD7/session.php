
<?php

session_start();

$_SESSION['login'] = "rouree";
$_SESSION['isAdmin'] = true;
$_SESSION['age'] = 19;


  ?>






<!DOCTYPE html>
<html>
<head>
	<title>TD7</title>
</head>
<body>
	<h1>Session</h1>
	<?php 
	unset($_SESSION['login']);
	session_unset();
	session_destroy();
	setcookie(session_name(), '', time()-1);


	 ?>
	<p>
		<?php 	echo $_SESSION['login'] . "\n" . $_SESSION['isAdmin'] . "\n" . $_SESSION['age'];  ?>
	</p>

</body>
</html>