<?php

//Si he pinchado en un link
if ($_GET) {

    if (isset($_COOKIE["servidor"])) {
        //Leemos lo que ya te gusta
        $gustos = $_COOKIE['servidor'];

        //Aquí desencriptas los datos
        //-----

        //Aquí habría que meter antes el contador de visitas.
        //juegos-1#ropa-4
        $gustos = $gustos."#".$_GET['interes'];

        //Separar los gustos y meterlos en un array
        $gustosArray = explode("#",$gustos);
        $gustosArray = array_unique($gustosArray);

        //Volvemos a convertir a string ya quitados los duplicados
        $gustosString = implode("#", $gustosArray);
        
        //Aquí encriptas los datos 
        //-----
        setcookie('servidor',$gustosString, time()+60000, "/tema3", "localhost", false, true);
        //echo "Cookie creada";
    } else {
        setcookie('servidor',"PrimeraVez2", time()+60000, "/tema3", "localhost", false, true);
    }


    header("Location: index.php");
}


