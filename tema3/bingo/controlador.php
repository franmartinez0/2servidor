<?php session_start(); ?>
<?php include('lib.php'); ?>
<?php


    if ($_POST) {

        if (isset($_POST['empezar'])) {
            //Iniciar variables de sesión

            $_SESSION['jugadores'] = $_POST['jugadores'];
            $_SESSION['tambor'] = array();
            for($i=1; $i<100; $i++) {
                array_push($_SESSION['tambor'],$i);
            }

            for($i=0; $i < $_SESSION['jugadores']; $i++) {
                $valor = 'carton'.$i;
                $_SESSION[$valor] = generarCarton();
            }

            header("Location: index.php?accion=inicio");

        }

    }




?>