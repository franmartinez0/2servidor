<?php
//dada la cadena "en un lugar de la mancha de cuyo nombre"-2
//muestra la cadena de al reves
//starlen- devuelve la longitud de la cadena
//genera numeros aleatorios entre los que te dice el (rand)

$cadena= " en un lugar de la mancha de cuyo nombre";
echo strlen($cadena);
echo $cadena(1);

for($i=$cadena-1;$i>0;$i--){

    echo $cadena[$i];
}


?>