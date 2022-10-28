<?php
session_start();
?>
<?php
include("cabecera.php");
?>


<?php

//escribimos nosotros unos proyectos para que siempre nos aparezcan

$proyectos = array(
    [
        "id" => 0, "nombre" => "Robot", "fechaini" => "2020", "fechafin" => "2020",
        "dias" => "1", "porcentaje" => 10,
        "importancia" => 3
    ],
    [
        "id" => 1, "nombre" => "Dron", "fechaini" => "2021", "fechafin" => "2021",
        "dias" => "5", "porcentaje" => 50,
        "importancia" => 3
    ],
    [
        "id" => 2, "nombre" => "Maquina", "fechaini" => "2022", "fechafin" => "2022",
        "dias" => "9", "porcentaje" => 90,
        "importancia" => 3
    ],
    [
        "id" => 3, "nombre" => "arduino", "fechaini" => "2022", "fechafin" => "2022",
        "dias" => "9", "porcentaje" => 90,
        "importancia" => 3
    ],
    [
        "id" => 4, "nombre" => "movil", "fechaini" => "2022", "fechafin" => "2022",
        "dias" => "9", "porcentaje" => 90,
        "importancia" => 3
    ],
    [
        "id" => 4, "nombre" => "portatil", "fechaini" => "2022", "fechafin" => "2022",
        "dias" => "9", "porcentaje" => 90,
        "importancia" => 3
    ],
    [
        "id" => 4, "nombre" => "tarjeta sim", "fechaini" => "2022", "fechafin" => "2022",
        "dias" => "9", "porcentaje" => 90,
        "importancia" => 3
    ],
);


//añadimos los datos del array a la sesion 

if (!isset($_SESSION['proyectos']))
    $_SESSION['proyectos'] = $proyectos;

echo '<div class="card-body">';
echo '<div class="table-responsive" >';
echo '<table class="table table-dark table-striped" id="dataTable" width="100%" cellspacing="0">';

echo "<thead>";
echo "<tr>";
echo "<td>" . "NOMBRE" . "</td>";
echo "<td>" . "FECHA INICIO" . "</td>";
echo "<td>" . "FECHA FINAL" . "</td>";
echo "<td>" . "DIAS TRANSCURRIDOS" . "</td>";
echo "<td>" . "PORCENTAJE COMPLETADO" . "</td>";
echo "<td>" . "IMPORTANCIA" . "</td>";
echo "</thead>";



//con el foreach pintamos cada
echo "<tbody>";
foreach ($_SESSION['proyectos'] as $valor) {
    echo "<tr>";
    echo "<td>" . $valor["nombre"] . "</td>";
    echo "<td>" . $valor["fechaini"] . "</td>";
    echo "<td>" . $valor["fechafin"] . "</td>";
    echo "<td>" . $valor["dias"] . "</td>";
    echo "<td>" . $valor["porcentaje"] . "</td>";
    echo "<td>" . $valor["importancia"] . "</td>";


    //añadimos el boton de borrar para poder eliminar por id
    echo "<td><a href='controlador.php?accion=borrarid&id=" . $valor['id'] . "'
    type='botton' name='borrarporid' class='btn btn-danger'>Borrar
    </a></td>";
    echo "<td><a href='controlador.php?accion=informacion&id=" . $valor['id'] . "'
    type='botton' name='informacion' class='btn btn-danger'>Info
    </button></td>";
    echo "</tr>";
}
echo "<tbody>";
echo '</table>';





//añadimos el boton de borrar todo 

echo '<button type="submit" name="borrartodo" class="btn btn-outline-success">
<a href="controlador.php?accion=borrartodo" id="botoncito" class="btn btn-danger">BORRAR TODO</a>
</button>';
echo '</div>';
echo '</div>';






?>
