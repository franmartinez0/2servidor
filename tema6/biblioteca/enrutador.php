<?php
session_start(); 

    //AUTOLOAD
    function autocarga($clase){ 
        $ruta = "./controladores/$clase.php"; 
        if (file_exists($ruta)){ 
          include_once $ruta; 
        }

        $ruta = "./modelos/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }

        $ruta = "./vistas/peliculas/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }

        $ruta = "./vistas/criticas/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }

        $ruta = "./vistas/$clase.php"; 
        if (file_exists($ruta)){ 
            include_once $ruta; 
        }
    } 
    spl_autoload_register("autocarga");


    //Función para filtrar los campos del formulario
    function filtrado($datos){
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes \
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }

    if ($_REQUEST) {
        if (isset($_REQUEST['accion'])) {

            //Inicio
            if ($_REQUEST['accion'] == "inicio") {
                ControladorPelicula::mostrarPeliculas(-1);
            }

            //Error
            if ($_REQUEST['accion'] == "error") {
                $codigo = filtrado($_REQUEST['codigo']);
                ControladorPelicula::mostrarPeliculas($codigo);
            }

            //Ver película en detalle
            if ($_REQUEST['accion'] == "verPelicula") {
                $id = filtrado($_REQUEST['id']);
                ControladorPelicula::mostrarPelicula($id);
            }
            
            //Insertar película
            if ($_REQUEST['accion'] == "nuevaPelicula") {
                $titulo = filtrado($_REQUEST['titulo']);
                $sinopsis = filtrado($_REQUEST['sinopsis']);

                $cartel = subirImagen();
                
                $notaImdb = filtrado($_REQUEST['notaImdb']);
                $director = filtrado($_REQUEST['director']);
                $year = filtrado($_REQUEST['year']);
                $pelicula = new Pelicula($titulo,$sinopsis,$cartel,$notaImdb,$director,$year);
                ControladorPelicula::insertarPelicula($pelicula);
                
            }



            //Nueva críticas
            if ($_REQUEST['accion'] == "nuevaCritica") {
                $nota = filtrado($_REQUEST['nota']);
                $texto = filtrado($_REQUEST['texto']);
                $fecha = filtrado($_REQUEST['fecha']);
                $id_pelicula = filtrado($_REQUEST['id_pelicula']);
                $usuario = unserialize($_SESSION['usuario']);
                ControladorCritica::nuevaCritica($usuario->getId(), $id_pelicula, $nota, $texto, $fecha);
            }
        }
    }


    ?>