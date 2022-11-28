
<?php
//creamos el objeto trucos
class trucos{
    private $nombre;
    private $descripcion;

    //creamos el constructor

    public function __construct($nombre,$descripcion){

        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        
    }

    //creamos la funcion pintar

    public function pintar(){
        echo "el truco es ".$this->nombre."y se hace con ".$this->descripcion;

    }

    //getters y setters

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }
    
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }


}





//creamos el objeto juego
class juego{

    private $nombre;
    private $genero;
    private $plataforma;
    private  trucos $trucos;   //array de truco 

    //creamos el constructor

    function __construct($nombre,$genero,$plataforma){

        $this->nombre = $nombre;
        $this->genero = $genero;
        $this->plataforma= $plataforma;
        
    }

    //creamos los getters y setters
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }
    
     
    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function getGenero(){
        return $this->genero;
    }
     
    public function setPlataforma($plataforma){
        $this->plataforma = $plataforma;
    }

    public function getPlataforma(){
        return $this->plataforma;
    }


    //creamos la funcion pintar

    public function pintar(){
        echo "el truco es ".$this->nombre." ,su genero es ".$this->descripcion." y su plataforma es ".$this->plataforma.".";
       // foreach($this.trucos as $trucos){
            $truco->pintar();
        }

    }


    //public function addTruco($nombre,$descripcion){

       
    //}
    
    //public function borrarTruco(){



  //  }



}





?>