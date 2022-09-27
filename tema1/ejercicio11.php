<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio13</title>
</head>
<body>
    <?php

    $numero=[];
    for ($i=0;$i<7;$i++ ){
        for($j=0;$j<7;$j++ ){
            $numero[$i][$i];
            if($I==$j){
                $numero[$i][$j] = 1;
            }else{
                $numero[$i][$j] = rand(1,9);
            }
        }
    }
    //calcular suma de las filas
    $sumafila =[];

    for ($i=0;$i<7;$i++){
        $sumafila[$i]=array_sum($numeros[$i]);
    }
    var_dump($sumafila);
    echo"<br/>";

    //calcular suma de las columnas 
    $sumaColum=[];
    for ($i=0;$i<7;$i++){
        $sumaColum[$j]=array_sum(array_column($numero,$j));

    }
    var_dump($sumaColum);
    echo"<br/>";

?>
    
</body>
</html>