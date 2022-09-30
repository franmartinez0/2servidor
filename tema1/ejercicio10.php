<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio10</title>
</head>
<body>
    <?php

$numeros = array(1,2,3,4,5,6,7,8,9,10);
$impar=0;
$par=0;
$contador=0;

for($i=0;$i<10;$i++){
    
    if($numeros[$i] %2==0){
        $par=$par+$numeros[$i];
        $contador++;
    }else{
        echo $numeros[$i].",";
    }

}
echo "<br>";
echo ($par/$contador)."media de todos los numeros pares"."<br>";

?>
</body>
</html>