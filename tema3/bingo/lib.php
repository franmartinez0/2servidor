<?php

    //FUNCIONES
    function pintarTambor() {

        echo "<div class='row'>";
        
        foreach($_SESSION['tambor'] as $num) {
            echo "<div class='col'>";
            echo "<span class='fs-6'>".$num."</span>";
            echo "</div>";
        }
        
        echo "</div>";

    }

    function pintarCarton($carton,$i) {
        $contador=0;
        echo "<div class='row'>";
        foreach($carton as $num) {
            echo "<div class='col'>";
            if (in_array($num, $_SESSION['salidos'])) {
                echo "<span class='fs-6 text-danger'>".$num."</span>";
                
                
                
                $contador++;
               
                if($contador==15){
                    ganar($i);
                }
            } else {
                echo "<span class='fs-6'>".$num."</span>";
            }
            
            echo "</div>";
        }
        
        echo "</div>";

    }



    function generarCarton() {
        $carton = array();
        for($i=0; $i<15; $i++) {
            $numero = rand(1,99);
            
            while (in_array($numero, $carton )) {
                $numero = rand(1,99);
            }

            array_push($carton, $numero);
        }

        return $carton;
    }

    function pintarFormularioJugadores() {
        echo "<form action='controlador.php' method='post'>";

        for($i=0; $i<$_SESSION['numJugadores'];$i++) {
            echo "<div class='mb-3'>
                        <label for='nick".$i."' class='form-label'>Nick</label>
                        <input type='text' class='form-control' name='nick".$i."'>
                        <label for='saldo".$i."' class='form-label'>Saldo</label>
                        <input type='number' class='form-control' name='saldo".$i."' min='1' max='500'>
                    </div>";
                    
        }

        echo "<button type='submit' name='empezar' class='btn btn-primary'>Enviar</button>";

        echo "</form>";
    }


    /*function mostrarAcertados($carton){
        $acertados=array();
        echo "acertados";
        echo "<div class='row'>";
        foreach($carton as $num) {

            echo "<div class='col'>";
            if (in_array($num, $_SESSION['salidos'])) {
                array_push($acertados,$num);

             
            }
            

    }
    }*/


    function ganar($i){

        echo"<br/>";
        echo"ha ganado un bote de ".bote()."monedas, haciendo un total de ". $_SESSION['jugador'.$i][1]+bote()." en total";
        echo"
        <div class='modal-dialog' role='document'>
          <div class='modal-content rounded-3 shadow'>
            <div class='modal-body p-4 text-center'>
              <p class='mb-0'>You can always change your mind in your account settings.</p>
            </div>
            <div class='modal-footer flex-nowrap p-0'>
              <button type='button' class='btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end'><strong>Yes, enable</strong></button>
              <button type='button' class='btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0' data-bs-dismiss='modal'>No thanks</button>
            </div>
          </div>
        </div>
      ";
    }



    function bote(){
        return $_SESSION['numJugadores']*5;
    }



    
    //FIN FUNCIONES -------------------------------------
