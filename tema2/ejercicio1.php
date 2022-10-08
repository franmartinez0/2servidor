<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
</head>
<body>
    <?php
    $empresas=array("cosentino","garciden","deretil","makito","globomatik");



    function letras($nombre,$opcion){

        switch($opcion){
            case "1":
                return strtolower($nombre);
                break;
            case "2":
                return strtoupper($nombre);
                break;
            case "3":   
                return ucfirst($nombre);

        }
    }


    echo letras($nombre[1],1);
    echo "<br>";
    echo letras($nombre[2],2);
    echo "<br>";
    echo letras($nombre[3],3);
    echo "<br>";


?>
</body>
</html>