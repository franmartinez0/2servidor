<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio7</title>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>

<body>

        

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Libreria Almanzora</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

        <?php


        //Función para pintar los productos por categoría
        function pintarPorCategoria($productos, $categoria)
        {
                echo "<h5 class='text-secondary     '>" . strtoupper($categoria) . "</h5>";
                $cont = 0;
                foreach ($productos as $valor) {

                        if ($valor['categoria'] == $categoria) {

                                if ($cont == 4)
                                        break;
                                $cont++;

                                echo "<div class='card mb-5' style='width: 16rem;'>
                            <img src='" . $valor["imagen"] . "' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                <h4 class='card-title'>" . $valor["nombre"] . "</h4>
                                <p class='card-text'>" . $valor['descripcion'] . "</p>";

                                echo "
                                <p class='card-text'><small class='text-secondary'>" . $valor["precio"] . " €</small></p>
    
                                <a href='controlador.php?accion=comprar&id=" . $valor["id"] . "' class='btn btn-primary'>Comprar</a>
                            </div>
                        </div>";
                        }
                }
        }


        //Productos de una tienda
        $productos = array(
                array(
                        "id" => 1, "nombre" => "La física del futuro: Cómo la ciencia determinará el destino de la humanidad", "imagen" => "img/1.jpg", "precio" => 15,
                        "categoria" => "ciencia", "descripcion" => "El futuro ya se está inventando en los laboratorios de los científicos más punteros de todo el mundo. Con toda probabilidad, en 2100 controlaremos los ordenadores a través de diminutos sensores cerebrales","isbn" => "8499898831",
                       
                ),
                array(
                        "id" => 2, "nombre" => "Breve historia del tiempo ", "imagen" => "img/2.jpg", "precio" => 14.20,
                        "categoria" => "ciencia", "descripcion" => "Breve historia del tiempo: del Big Bang a los agujeros negros (en su inglés original: A Brief History of Time: From the Big Bang to Black Holes) es un libro de divulgación científica publicado en 1988 por el físico teórico, astrofísico, cosmólogo y divulgador científico británico Stephen Hawking ","isbn" => "9684063563",
                       
                ),
                array(
                        "id" => 3, "nombre" => "El origen de las especies", "imagen" => "img/3.jpg", "precio" => 13.20,
                        "categoria" => "ciencia", "descripcion" => "Con esta obra, Charles Darwin presentó su teoría de la evolución mediante la selección natural que, pasados más de cien años, continúa siendo la base del estudio de la naturaleza para la biología actual.","isbn" => "8467029153",
                        
                ),
                array(
                        "id" => 4, "nombre" => "El origen del hombre", "imagen" => "img/4.jpg", "precio" => 25.55,
                        "categoria" => "ciencia", "descripcion" => "La importancia y fama de El origen de las especies (1859), el libro en el que Charles Darwin (1809-1882) presentó la teoría de la evolución de las especies, ha hecho que otras obras suyas sean, injustamente, mucho menos conocidas","isbn" => "8491992642",
                      
                ),
                array(
                        "id" => 5, "nombre" => "La riqueza de las naciones", "imagen" => "img/5.jpg", "precio" => 16.62,
                        "categoria" => "economía", "descripcion" => "La idea de que la riqueza proviene del trabajo (y no del oro ni de la plata), siendo susceptible de aumentar con una adecuada regulación del funcionamiento del mercado","isbn" => "842065096X",
                        
                ),
                array(
                        "id" => 6, "nombre" => "Sapiens. De animales a dioses", "imagen" => "img/6.jpg", "precio" => 18.90,
                        "categoria" => "ciencia", "descripcion" => "Audaz, ambicioso y provocador, este libro cuestiona todo lo que creíamos saber sobre el ser humano: nuestros orígenes, nuestras ideas, nuestras acciones, nuestro poder... y nuestro futuro.","isbn" => "8499926223",
                        
                ),
                array(
                        "id" => 7, "nombre" => "Por qué fracasan los países", "imagen" => "img/7.jpg", "precio" => 11.35,
                        "categoria" => "economía", "descripcion" => "responde a estas y otras cuestiones con una nueva y convincente teoría: la prosperidad no se debe al clima, a la geografía o a la cultura, sino a las políticas dictaminadas por las instituciones de cada país. ","isbn" => "8423418901",
                        
                ),
                array(
                        "id" => 8, "nombre" => "21 lecciones para el siglo XXI", "imagen" => "img/p8.jpg", "precio" => 10.40,
                        "categoria" => "ciencia", "descripcion" => "21 lecciones para el siglo XXI es una exploración de nuestro presente.","isbn" => "8466361200",
                        
                ),
                array(
                        "id" => 9, "nombre" => "AMAR(ME)", "imagen" => "img/9.jpg", "precio" => 17.63,
                        "categoria" => "Psicología", "descripcion" => "Amarnos a nosotros mismos determina gran parte de nuestra vida.En este libro encontrarás multitud de técnicas","isbn" => "8712272303",
                       
                ),
                array(
                        "id" => 10, "nombre" => "Pensar rápido, pensar despacio", "imagen" => "img/10.jpg", "precio" => 23.65,
                        "categoria" => "Psicología", "descripcion" => "En Pensar rápido, pensar despacio, un éxito internacional, Kahneman nos ofrece una revolucionaria perspectiva del cerebro","isbn" => " 8483068613",
                        
                ),
                 array(
                        "id" => 11, "nombre" => "Cómo funciona la psicología", "imagen" => "img/11.jpg", "precio" => 16.80,
                        "categoria" => "Psicología", "descripcion" => "Explora la mente humana y descubre la ciencia que se oculta detrás del modo en que pensamos y actuamos con esta nueva guía visual de psicología aplicada","isbn" => "0241382378",
                       
                ),
                array(
                        "id" => 12, "nombre" => "Por si las voces vuelven", "imagen" => "img/12.jpg", "precio" => 17,
                        "categoria" => "Psicología", "descripcion" => "Un sorprendente testimonio sobre la locura. Un relato en primera persona sobre lo que supone perderse y tener que reconstruirse desde cero","isbn" => "8408249215",
                       
                ),
                 array(
                        "id" => 13, "nombre" => "Hábitos atómicos", "imagen" => "img/13.jpg", "precio" => 17,
                        "categoria" => "Psicología", "descripcion" => "Un discurso que se apoya en bases científicas, manual de instrucciones para implantar cambios a nuestro favor.","isbn" => "8418118032",
                        
                ),
                array(
                        "id" => 14, "nombre" => "EL SUTIL ARTE DE QUE (CASI TODO) TE IMPORTE UNA MIERDA", "imagen" => "img/14.jpg", "precio" => 17,
                        "categoria" => "Psicología", "descripcion" => "El bloguero superestrella Mark Manson nos demuestra que la clave para ser personas más seguras y felices es manejar de mejor forma la adversidad. ¡A la mierda con la positividad!","isbn" => "8418118032",
                        
                ),
                array(
                    "id" => 15, "nombre" => "El libro prohibido de la economía", "imagen" => "img/15.jpg", "precio" => 8.50,
                    "categoria" => "economía", "descripcion" => "Si el tono es divertido e irónico, el mensaje que encierran estas páginas
                    es absolutamente serio: hemos de aprender a defendernos, cuestionando
                    ideas establecidas","isbn" => "8467049308",
                   
                ),
                array(
                "id" => 16, "nombre" => "El vendedor de tiempo", "imagen" => "img/16.jpg", "precio" => 5.65,
                "categoria" => "economía", "descripcion" => "Con una ácida e irónica visión de la empresa, del mundo industrial y del advenimiento del marketing de masas, Fernando Trías de Bes nos recuerda que son los ciudadanos los que sostienen las economías","isbn" => "849578775X",
                
        ),
        );

        //Metemos en la sesión todos los productos
        if (!isset($_SESSION['productos']))
                $_SESSION['productos'] = $productos;

        //Metemos en la sesión el carrito de la compra si no está ya
        //Si es la primera que vez entro creo la variable de sesión
        if (!isset($_SESSION['carro'])) {
                $_SESSION['carro'] = array();
        }


        //Div para pintar productos ----------------------------------------
        echo "<div class='container'>";
        echo "<div class='row'>";

        //Me quedo con los valores de la columna categoría, y los valores los meto en un array
        $categorias = array_column($_SESSION['productos'], "categoria");
        //Quito repetidos
        $categorias = array_unique($categorias);

        foreach ($categorias as $categoria)
                pintarPorCategoria($_SESSION['productos'], $categoria);

        echo "</div>";
        //Fin div para pintar productos ------------------------------------
        echo "</div>";


        ?>


        



</body>
</html>