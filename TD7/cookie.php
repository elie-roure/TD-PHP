<?php

	setcookie("Cookie1", "OK", time()+3600);
	$cookieTab = array('coucou' => 1 ,
						'salut' => 2 ,
						'bonjour' => 3 );
	setcookie("Cookie2", serialize($cookieTab), time()+3600);
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>TD7</title>
</head>
<body>
<h1>Cookie</h1>
<p>
<?php 

echo  $_COOKIE["Cookie1"]; 
$tabUnse = unserialize($_COOKIE["Cookie2"]);
print_r($tabUnse);


?>
</p>
  </body>
</html>
