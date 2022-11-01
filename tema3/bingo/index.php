<?php include('cabecera.php'); ?>

<?php

pintarTambor();

for($i=0; $i<$_SESSION['jugadores'];$i++) {
    echo "<br>";
    echo "<h1>Jugador $i</h1>";
    pintarCarton($_SESSION['carton'.$i]);
}

?>
