<?php

class productosBD{

    public static function getProductos(){
        $conexion= ConexionBD::conectar();
    
    
        //realizamos la cocnsulta en la BBDD
        $stmt = $conexion->prepare("SELECT * FROM productos");
    
                $stmt->execute();
    
                //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
                $productos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'producto');
    
                ConexionBD::cerrar();
    
                return $productos;
    }
    
    public static function getProducto($idProductos) {
        $conexion = ConexionBD::conectar();
    
        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * FROM productos WHERE idProductos = ?");
        $stmt->bindValue(1, $idProductos);
        $stmt->execute();
    
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'producto');
        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $producto = $stmt->fetch();
    
        ConexionBD::cerrar();
    
        return $producto;
    }
    
    
    public static function insertarProducto($producto) {
        $conexion = ConexionBD::conectar();
    
        //Consulta BBDD
        $stmt = $conexion->prepare("INSERT INTO productos (idProductos,codigo,modelo,fabricante,descripcion,imagen,stock,estado,localizacion_id,categoria_id) 
                    VALUES (?,?,?,?,?,?,?) " );
        $stmt->bindValue(1,$producto->getIdProductos());
        $stmt->bindValue(2,$producto->getCodigo());
        $stmt->bindValue(3,$producto->getModelo());
        $stmt->bindValue(4,$producto->getFabricante());
        $stmt->bindValue(5,$producto->getDescripcion());
        $stmt->bindValue(6,$producto->getImagen());
        $stmt->bindValue(7,$producto->getStock());
        $stmt->bindValue(8,$producto->getEstado());
        $stmt->bindValue(9,$producto->getLocalizacion_id());
        $stmt->bindValue(10,$producto->getCategoria_id());
       
    
        //echo $stmt->debugDumpParams();
        $stmt->execute();
    
        ConexionBD::cerrar();
    }
    
    
    public static function borrarCategoria($idProductos) {
        $conexion = ConexionBD::conectar("inventario");
    
        $stmt = $conexion->prepare("DELETE FROM productos WHERE idProductos = :idProductos");
        // Bind
        $stmt->bindValue(":idProductos", $idProductos);
        // Ejecuta la consulta
        $stmt->execute();
    
        ConexionBD::cerrar();
    }
    }
    ?>



?>