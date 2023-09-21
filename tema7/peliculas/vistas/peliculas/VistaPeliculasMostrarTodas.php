<?php

    class VistaPeliculasMostrarTodas {

        public static function render($peliculas,$codigo) {

            include("./vistas/cabecera.php");
//echo "Quitar ".$codigo;
            echo ' <div class="album py-5 bg-light">
            <div class="container">
        
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';

            //Para cada película, la pinto en un card
            foreach($peliculas as $pelicula) {

                echo ' <div class="col">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>'.$pelicula->getTitulo().'</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">'.$pelicula->getTitulo().'</text>
                  <image href="'.$pelicula->getCartel().'" width="100%"/>
                  </svg>
      
                  <div class="card-body">
                    <p class="card-text">'.$pelicula->getTitulo().'</p>
                    <p class="card-text">'.$pelicula->getSinopsis().'</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="enrutador.php?accion=verPelicula&id='.$pelicula->getId().'" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                      </div>
                      <small class="text-muted">Nota: '.$pelicula->getNotaImdb().'</small>
                    </div>
                  </div>
                </div>
              </div>';
            }

            echo "</div></div></div>";


            include("./vistas/pie.php");
        }

    }
?>