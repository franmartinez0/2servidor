
<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio3</title>
</head>
<body>
    <?php

    $radio=(rand(2,10));

    function volumen($radio){

        $volumen=((4/3)*pi()*pow($radio, 3));

        return $volumen;
    };

    echo("el radio es de: ".$radio);
    echo ("<br/>");
    echo("el volumen de la esfera es de: ". volumen($radio));

    ?>
</body>
</html>