<?php


   function mostrarNoticia ($appid){
    $uri= "".$appid.".";


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
          <h5 class='card-title'>".$juego->newsitem->title."</h5>
          <p class='card-text'>".$juego->newsitem->contents."</p>
          
        </div>
      </div>
        
        ";
    
    }

   }
   }