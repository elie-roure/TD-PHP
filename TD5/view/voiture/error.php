<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Error</title>
</head>
<body>
     <?php
     $immatHTML = htmlspecialchars($immat);
     $immatURL = rawurlencode($immat);
        echo "La voiture immatriculée : " .  $immatHTML . " n'est pas repertoriée." ;
        ?>
</body>
</html>
