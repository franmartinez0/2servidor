<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
</head>
<body>
<?php

$ip="192.168.11.200.";

$trozo= explode(".", $ip);

echo $trozo[0];
echo "<br>";
echo $trozo[1];
echo "<br>";
echo $trozo[2];



$nuevotrozo =implode(":",$trozo);
echo "<br>";

echo $nuevotrozo;
echo "<br>";




?>
</body>
</html>