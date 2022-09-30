<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio6</title>
</head>
<body>
    <?php
        $dni= 56764932;

        $resto=($dni%23);

        $todasletras = array(0 => "T", 1 => "R", 2 => "W", 3 => "A", 4 => "G", 5 => "M", 6 => "Y", 7 => "F", 8 => "P", 9 => "D", 10 => "X", 11 => "B", 12 => "N", 13 => "J",
         14 => "Z", 15 => "S", 16 => "Q", 17 => "V", 18 => "H", 19 => "L", 20 => "C", 21 => "K", 22 => "E");


         $letradni = $resto;
        if (array_key_exists($resto, $todasletras)) {
        echo "la letra del dni es: " . $todasletras[$resto];
        }



    ?>
</body>
</html>