<?php

class localizaciones{
    private $idLocalizacion;
    private $ciudad;
    private $nombreEdificio;
    private $direccionEdificio;
    private $numeroSala;
    private $planta;
    private $descripcion;



    public function __construct($idLocalizacion="",$ciudad="",$nombreEdificio="",$direccionEdificio="",$numeroSala="",$planta="",$descripcion="")
    {
        $this->idLocalizacion = $idLocalizacion;
        $this->ciudad = $ciudad;
        $this->nombreEdificio = $nombreEdificio;
        $this->direccionEdificio = $direccionEdificio;
        $this->numeroSala = $numeroSala;
        $this->planta = $planta;
        $this->descripcion = $descripcion;
    }

    /**
     * Get the value of idLocalizacion
     */ 
    public function getIdLocalizacion()
    {
        return $this->idLocalizacion;
    }

    /**
     * Set the value of idLocalizacion
     *
     * @return  self
     */ 
    public function setIdLocalizacion($idLocalizacion)
    {
        $this->idLocalizacion = $idLocalizacion;

        return $this;
    }

    /**
     * Get the value of ciudad
     */ 
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     *
     * @return  self
     */ 
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get the value of nombreEdificio
     */ 
    public function getNombreEdificio()
    {
        return $this->nombreEdificio;
    }

    /**
     * Set the value of nombreEdificio
     *
     * @return  self
     */ 
    public function setNombreEdificio($nombreEdificio)
    {
        $this->nombreEdificio = $nombreEdificio;

        return $this;
    }

    /**
     * Get the value of direccionEdificio
     */ 
    public function getDireccionEdificio()
    {
        return $this->direccionEdificio;
    }

    /**
     * Set the value of direccionEdificio
     *
     * @return  self
     */ 
    public function setDireccionEdificio($direccionEdificio)
    {
        $this->direccionEdificio = $direccionEdificio;

        return $this;
    }

    /**
     * Get the value of numeroSala
     */ 
    public function getNumeroSala()
    {
        return $this->numeroSala;
    }

    /**
     * Set the value of numeroSala
     *
     * @return  self
     */ 
    public function setNumeroSala($numeroSala)
    {
        $this->numeroSala = $numeroSala;

        return $this;
    }

    /**
     * Get the value of planta
     */ 
    public function getPlanta()
    {
        return $this->planta;
    }

    /**
     * Set the value of planta
     *
     * @return  self
     */ 
    public function setPlanta($planta)
    {
        $this->planta = $planta;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }
}

?>