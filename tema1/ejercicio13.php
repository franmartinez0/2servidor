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

    //llenar la cola por referencia
    function addcola(&$cola,$num){
        for($i=0;$i<$num;$i++){
            array_push($cola);

        }
        return $cola;
    }
    
    //vaciar cola por referencia


    

?>
    
</body>
</html>