<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio12</title>
</head>

<body>
    <?php

    $diccionario = array(
        "casa" => "house", "mesa" => "table", "silla" => "chair", "uno" => "one", "dos" => "two", "tres" => "three", "cuatro" => "four", "cinco" => "five",
        "seis" => "six", "siete" => "eight", "ocho" => "nine", "diez" => "ten", "ingles" => "english", "ordenador" => "computer", "profesor" => "teacher",
        "juego" => "game", "libro" => "book", "raton" => "mouse", "movil" => " phone"
    );



    $palabra = "dos";
    if (array_key_exists($palabra, $diccionario)) {
        echo "la traduccion es " . $diccionario[$palabra];
    } else {
        echo "palabra no esta, prueba otra";
    }





    ?>
</body>

</html>