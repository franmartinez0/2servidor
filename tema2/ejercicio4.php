<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio4</title>
</head>

<body>
    <?php
    

    function encriptar($mensaje, $clave)
    {

        //divide el string en partes de 1 en 1
        $letra = str_split($mensaje, 1);

        //cada valor es variado tras pasarlo al codigo ascii
        foreach ($letra as $valor) {
            $num = ord($valor);
            $nuevo = chr($num + $clave);
            //mostramos el texto encriptado
            echo $nuevo;
        }
        echo "<br>";
    }


    function desencriptar($mensaje, $clave)
    {
        //volvemos a separar el codigo de 1 en 1
        $letra = str_split($mensaje, 1);
        //variamos el codigo ascii de cada uno para poder descifrar el codigo cifrado anteriormente
        foreach ($letra as $valor) {
            $num = ord($valor);
            $des = chr($num - $clave);
            //mostramos codigo desencriptado
            echo $des;
        }
        echo "<br>";
    }




    echo encriptar("esto es un mensaje encriptado", 1);
   echo desencriptar("ftup!ft!vo!nfotbkf!fodsjqubep", 1);


    ?>
</body>

</html>