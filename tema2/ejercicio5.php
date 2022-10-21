<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<body>
    <?php
 function encriptar($mensaje, $clave)
    {
        echo $mensaje;
        echo "<br>";
        $contrario = strrev($mensaje);
        echo $contrario;
        echo "<br>";
        $letras = str_split($contrario, 1);



        
            $letra = str_split($mensaje, 1);
    
            foreach ($letra as $valor) {
                $num = ord($valor);
                $nuevo = chr($num + $clave);
    
                echo $nuevo;
            }
            echo "<br>";
        
        
    }

    function desencriptar($mensaje, $clave)
    {
        echo $mensaje;
        echo "<br>";
        $contrario = strrev($mensaje);
        echo $contrario;
        echo "<br>";
        $letras = str_split($contrario, 1);

        $letra = str_split($mensaje, 1);

        foreach ($letra as $valor) {
            $num = ord($valor);
            $des = chr($num - $clave);

            echo $des;
        }
        echo "<br>";
    }
    echo encriptar("esto esta encriptado despues de escribirlo del reves", 1);
    echo "<br>";
    echo desencriptar("ftup!ftub!fodsjqubep!eftqvft!ef!ftdsjcjsmp!efm!sfwft", 1);
        
    ?>
    
</body>
</html>