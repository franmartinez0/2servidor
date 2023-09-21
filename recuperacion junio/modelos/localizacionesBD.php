<?php
class localizacionesDB{

public static function getLocalizaciones(){
    $conexion= ConexionBD::conectar();


    //realizamos la cocnsulta en la BBDD
    $stmt = $conexion->prepare("SELECT * FROM localizaciones");

            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $localizaciones = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'localizacion');

            ConexionBD::cerrar();

            return $localizaciones;
}

public static function getLocalizacion($idLocalizacion) {
    $conexion = ConexionBD::conectar();

    //Consulta BBDD
    $stmt = $conexion->prepare("SELECT * FROM localizaciones WHERE idLocalizacion = ?");
    $stmt->bindValue(1, $idLocalizacion);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'localizacion');
    //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
    $localizacion = $stmt->fetch();

    ConexionBD::cerrar();

    return $localizacion;
}


public static function getProductosLocalizacion($idLocalizacion) {
    $conexion = ConexionBD::conectar();

    //Consulta BBDD
    $stmt = $conexion->prepare("SELECT * FROM productos WHERE idLocalizacion = ?");
    $stmt->bindValue(1, $idLocalizacion);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'producto');
    //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
    $productos = $stmt->fetchAll();

    ConexionBD::cerrar();

    return $productos;
}

public static function insertarLocalizacion($localizacion) {
    $conexion = ConexionBD::conectar();

    //Consulta BBDD
    $stmt = $conexion->prepare("INSERT INTO localizaciones (idLocalizacion,ciudad,nombreEdificio,direccionEdificio,numeroSala,planta,descripcion) 
                VALUES (?,?,?,?,?,?,?) " );
    $stmt->bindValue(1,$localizacion->getIdLocalizacion());
    $stmt->bindValue(2,$localizacion->getCiudad());
    $stmt->bindValue(3,$localizacion->getNombreEdificio());
    $stmt->bindValue(4,$localizacion->getDireccionEdificio());
    $stmt->bindValue(5,$localizacion->getNumeroSala());
    $stmt->bindValue(6,$localizacion->getPlanta());
    $stmt->bindValue(7,$localizacion->getDescripcion());
   
   
   

    //echo $stmt->debugDumpParams();
    $stmt->execute();

    ConexionBD::cerrar();
}


public static function borrarCategoria($idLocalizacion) {
    $conexion = ConexionBD::conectar("inventario");

    $stmt = $conexion->prepare("DELETE FROM localizaciones WHERE idLocalizacion = :idLocalizacion");
    // Bind
    $stmt->bindValue(":idLocalizacion", $idLocalizacion);
    // Ejecuta la consulta
    $stmt->execute();

    ConexionBD::cerrar();
}
}
?>