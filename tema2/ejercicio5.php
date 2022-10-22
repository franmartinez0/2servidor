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
        //muestra mensaje en orden normal
        echo $mensaje;
        echo "<br>";
        //muestra mensaje al contrario

        $contrario = strrev($mensaje);
        echo $contrario;

        echo "<br>";





        //dividimos el string de 1 en 1


        $letra = str_split($mensaje, 1);
        //encriptamos
        foreach ($letra as $valor) {
            $num = ord($valor);
            $nuevo = chr($num + $clave);

            echo $nuevo;
        }
        echo "<br>";
    }

    function desencriptar($mensaje, $clave)
    {
        //mostarmos texto encriptado
        echo $mensaje;
        echo "<br>";


        //hacemos que el string esté al contrario y mostramos texto encriptado al contrario
        $contrario = strrev($mensaje);
        echo $contrario;
        echo "<br>";


        //dividimos el string en partes de 1 en 1

        $letra = str_split($mensaje, 1);
        //utilizamos la funcion de desencriptar

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