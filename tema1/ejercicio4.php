<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 4</title>
</head>
<body>
    
<?php
//para realizar la ecuacion de segundo grado primero deberemos tomar los tres valores

$a=10;
$b=14;
$c=2;


$x1=(-$b+sqrt((pow($b,2))-(4*$a*$c)))/(2*$a);
$x2=(-$b-sqrt((pow($b,2))-(4*$a*$c)))/(2*$a);





echo("el primer resultado es: ".$x1);
echo"<br>";
echo("el segundo resultado es: ".$x2);







?>



</body>
</html>