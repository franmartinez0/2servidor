<?php
class juego{

    private $nombre;
    private $genero;
    private $plataforma;

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

    }


}



?>