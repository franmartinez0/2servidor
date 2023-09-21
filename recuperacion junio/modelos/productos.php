<?php
class productos{

    private $idProductos;
    private $codigo;
    private $modelo;
    private $fabricante;
    private $descripcion;
    private $imagen;
    private $stock;
    private $estado;
    private $localizacion_id;
    private $categoria_id;

public function __construct($idProductos="",$codigo="",$modelo="",$fabricante="",$descripcion="",$imagen="",$stock="",$estado="",$localizacion_id="",$categoria_id="")
{
    $this->idProductos=$idProductos;
    $this->codigo=$codigo;
    $this->modelo=$modelo;
    $this->fabricante=$fabricante;
    $this->descripcion=$descripcion;
    $this->imagen=$imagen;
    $this->stock=$stock;
    $this->estado=$estado;
    $this->localizacion_id=$localizacion_id;
    $this->categoria_id=$categoria_id;

}




    /**
     * Get the value of idProductos
     */ 
    public function getIdProductos()
    {
        return $this->idProductos;
    }

    /**
     * Set the value of idProductos
     *
     * @return  self
     */ 
    public function setIdProductos($idProductos)
    {
        $this->idProductos = $idProductos;

        return $this;
    }

    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of fabricante
     */ 
    public function getFabricante()
    {
        return $this->fabricante;
    }

    /**
     * Set the value of fabricante
     *
     * @return  self
     */ 
    public function setFabricante($fabricante)
    {
        $this->fabricante = $fabricante;

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

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get the value of stock
     */ 
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */ 
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of localizacion_id
     */ 
    public function getLocalizacion_id()
    {
        return $this->localizacion_id;
    }

    /**
     * Set the value of localizacion_id
     *
     * @return  self
     */ 
    public function setLocalizacion_id($localizacion_id)
    {
        $this->localizacion_id = $localizacion_id;

        return $this;
    }

    /**
     * Get the value of categoria_id
     */ 
    public function getCategoria_id()
    {
        return $this->categoria_id;
    }

    /**
     * Set the value of categoria_id
     *
     * @return  self
     */ 
    public function setCategoria_id($categoria_id)
    {
        $this->categoria_id = $categoria_id;

        return $this;
    }
}


?>