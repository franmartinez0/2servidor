<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio8</title>
</head>
<body>
    <?php
    for($i=0;$i<6;$i++){
        $array[$i]=rand(0,49);
 
    }

    for ($j=0;$j<count($array)-1;$j++){
        if($array[$j]<10){
            echo"0".$array[$j]." ";
        }else{
            echo$array[$j]." ";
        }
       

    }
    



?>
</body>
</html>