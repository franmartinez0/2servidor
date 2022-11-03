<?php
session_start();
//session_destroy();
?>
<?php
  header("Content-Type: text/html; charset=UTF-8");
?>

<?php
include "lib.php";
?>
<?php



//comprobamos que el boton se haya pulsado
if (isset($_POST["login"])) {
if ($_POST["login"]="login"){   
    if(isset($_POST["email"]) && isset($_POST["password"])) {//comprobamos que existe la contraseña y el email
        if (isset($_POST["email"]) && isset($_POST["password"])) {
            $_SESSION['email'] = $_POST["email"];
            $_SESSION['password'] = $_POST["password"];    
            $mayus = true;
            

            if (($_SESSION['password']) == strtolower($_SESSION['password'])) {//comprobar que existen mayusculas y pasarla a booleano 
                $mayus = false;
            }

            if (strlen($_SESSION['password']) >= 8 && $mayus == true) {//te hace login 
                echo '<script>window.location="' . "proyectos.php" . '"</script>';
            
            
            } else if (strlen($_SESSION['password']) < 8) {//contraseña menor de 8

                $error='contraseña corta introduce al menos 8 caracteres';
                echo '<script>window.location="' . "login.php?error=$error" . '"</script>';
               
            } else if ($mayus == false) {//no hay mayusculas 
                $error = 'Introduce al menos una mayúscula';
                echo '<script>window.location="' . "login.php?error=$error" . '"</script>';
            } else {



                
                $error = "dato incorrecto";
                echo '<script>window.location="' . "login.php" . '"</script>';
            }
        } else {
            $error = "campo vacio";
            echo '<script>window.location="' . "login.php?error=$error" . '"</script>';
        }
    }
}




}


?>





<?php
//para eliminar el proyecto se crea un array nuevo sin el proyecto que queremos eliminar

if ($_GET['accion'] == "borrarid") {


    $proyectoNuevo = array();
    foreach ($_SESSION['proyectos'] as $proyecto) {
        if ($proyecto['id'] != $_GET['id']) {
            array_push($proyectoNuevo, $proyecto);
        }
    }
    $_SESSION['proyectos'] = $proyectoNuevo;
    echo '<script>window.location="' . "proyectos.php" . '"</script>';
}





?>

<?php
//el boton colocado en la propia tabla te dirige hacia ver proyecto , donde tomará los datos del proyecto y pintara 
//en un grafico circular
if ($_GET['accion'] == "informacion") {
    foreach ($_SESSION['proyectos'] as $key => $value) {
        if ($_GET['id'] == $key) {
            $_SESSION['ids'] = $_SESSION['proyectos'][$key];
            echo '<script>window.location="' . "verProyecto.php" . '"</script>';
        }
    }
}

?>

<?php
//para borrar todo se creará un array vacío al presionar el boton 
if (isset($_GET["accion"])) {
    if ($_GET['accion'] == "borrartodo") {
foreach ($_SESSION['proyectos'] as $i => $value) {
            unset($_SESSION['proyectos'][$i]);
        }
        echo '<script>window.location="' . "proyectos.php" . '"</script>';
    }
}

?>
<?php
//al utilizar el boton de logout se cierra la sesion y te redirige al login de nuevo
if ($_GET['accion'] == "cerrar") {
    session_destroy();
    echo '<script>window.location="' . "login.php" . '"</script>';
}
?>





<?php
if ($_GET['accion'] == "borrarid") {


    $proyectoNuevo = array();
    foreach ($_SESSION['proyectos'] as $pr) {
        if ($pr['id'] != $_GET['id']) {
            array_push($proyectoNuevo, $pr);
        }
    }
    $_SESSION['proyectos'] = $proyectoNuevo;
    echo '<script>window.location="' . "proyectos.php" . '"</script>';
}
?>



<?php
if (isset($_POST['accion'])) {
    if ($_POST["accion"] == "formulario") {
        if ($_POST) {

            if (isset($_POST['nuevoProyecto'])) {
                $nombre = filtrado($_POST['nombre']);
                $fechaInicio = filtrado($_POST['fechaInicio']);
                $fechaFinPrevisto = filtrado($_POST['fechaFinPrevista']);
                $diasTranscurridos = filtrado($_POST['diasTranscurridos']);
                $porcentajeCompletado = filtrado($_POST['porcentajeCompletado']);
                $importancia = filtrado($_POST['importancia']);

                if (isset($_SESSION['proyectos'])) {
                    $id = 0;
                } else {
                    //Calculamos el id mayor
                    $ids = array_column($_SESSION['proyectos'], 'id');
                    $id = max($ids) + 1;
                }
                array_push($_SESSION['proyectos'], [
                    'id' => $id, 'nombre' => $nombre, 'diasTranscurridos' => $diasTranscurridos,
                    'fechaInicio' => $fechaInicio, 'fechaFinPrevista' => $fechaFinPrevisto, 'porcentajeCompletado' => $porcentajeCompletado, 'importancia' => $importancia
                ]);

                echo '<script>window.location="' . "proyectos.php" . '"</script>';
            }
        }
    }
}
?>