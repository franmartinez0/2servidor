<?php


   function mostrarJuego ($appid){
    $uri= "https://store.steampowered.com/api/appdetails?appids=".$appid.".";


    $reqPrefst['http']['method']='GET';
    $reqPrefst['http']['header']='X-Auth-Token';

    $resultado= file_get_contents($uri,false);

if ($resultado!==false){
    $respPHP = json_decode($resultado);
   
    


    foreach($respPHP as $juego){
      include "cabecera.php";

        echo"
        <div class='card' style='width: 18rem;'>
        <img src=".$juego->data->header_image."alt='card image cap'>
        <div class='card-body'>
          <h5 class='card-title'>".$juego->data->name."</h5>
          <p class='card-text'>".$juego->data->short_description."</p>
          
        </div>
      </div>
        
        ";
        echo "
        <!-- MODALES -->
        <div class='modal fade' id='modalVoto' tabindex='-1'>
        <div class='modal-dialog'>
            <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title'>Vota por la serie</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                <form action='enrutador.php' method='post' id='formVotar'>
                    <input type='hidden' name='id' value='".$id."'>
                    <input type='hidden' name='accion' value='votar'>
                    
                    <input type='textarea' name='valor' min='1' max='10'>
                </form>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                <button type='submit' form='formVotar' class='btn btn-primary' >Votar</button>
            </div>
            </div>
        </div>
        </div> 
    ";
    }

   }
   }
?>