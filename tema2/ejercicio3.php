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
/*
Crear un array llamado $word_list_en con 50 palabras en inglés. Crea otro array
llamado $word_list_es con las mismas 50 palabras en el mismo orden, pero en
español. El ejercicio consiste en hacer un traductor literal de español a inglés o
viceversa, debe recorrer una cadena de texto y devolverla en el idioma traduciendo
una por una las palabras (se supone que están en la misma posición en los
arrays)

*/
$lista_espa = array("hola","adios","padre","ordenador","cafe","movil","botella","profesor","uno","dos");
$lista_eng= array ("hello","bye","father","computer","coffee","phone","bottle","teacher","one","two");

$esta=false;

for($i=0;$i<count($lista_esp);$i++){
    if ($lista_es[$i]==$palabra){
        return $lista_eng[$i];
        $esta=true;
        
    }

}
if ($esta==false){
echo ("esa palabra no está prueba con otra (ej:hola)");

}

$lista_espa("movil");


?>
</body>
</html>