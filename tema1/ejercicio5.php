<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio5</title>
</head>
<body>
<?php

$numero=(rand(0,99));
$formatterES = new NumberFormatter("es", NumberFormatter::SPELLOUT);


echo("el numero en cifra es el: ".$numero);
echo("<br/>");
echo $formatterES->format($numero);






?>
</body>
</html>