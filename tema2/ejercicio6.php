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

    function lineaPedido($array)
    {
        $totalLinea = 0;

        if ($array["iva_r"] == 0) {
            $totalLinea = $array["precio"] * $array["cant"] * 1.21;
        } else if ($array["iva_r"] == 1) {
            $totalLinea = $array["precio"] * $array["cant"] * 1.1;
        }

        return $totalLinea;
    }
    $carrito = array(
        array("id" => 1234, "nombre" => "PS4", "precio" => 349.95, "cant" => 2, "iva_r" => 0),
        array("id" => 1235, "nombre" => "iPhone XS", "precio" => 1249.95, "cant" => 1, "iva_r" => 0),
        array("id" => 1236, "nombre" => "Chocolate", "precio" => 9.95, "cant" => 5, "iva_r" => 1)
    );


    echo "<table class='table'>";
    echo "<tbody>";
    $total = 0;
    foreach ($carrito as $linea) {
        echo "<tr>";
        echo "<td>" . $linea['nombre'] . "</td>";
        echo "<td>" . $linea['cant'] . "</td>";

        echo "<td>";
        if ($linea['iva_r'] == 0)
            echo "21%";
        else
            echo "10%";
        echo "</td>";

        echo "<td>" . lineaPedido($linea) . " €</td>";

        $total += lineaPedido($linea);

        echo "</tr>";
    }

    echo "<tr><td colspan='3'>Total</td><td>" . $total . " €</td></tr>";
    echo "</tbody>";
    echo "</table>";

    ?>







    </div>
    </div>
    </div>









    ?>
</body>

</html>