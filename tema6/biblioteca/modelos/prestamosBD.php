<?php
class prestamosDB{

public static function getPrestamos(){
    $conexion= ConexionBD::conectar();


    //realizamos la cocnsulta en la BBDD
    $stmt = $conexion->prepare("SELECT * FROM prestamos");

            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $prestamos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'prestamo');

            ConexionBD::cerrar();

            return $prestamos;
}

public static function getPrestamo($idPrestamo) {
    $conexion = ConexionBD::conectar();

    //Consulta BBDD
    $stmt = $conexion->prepare("SELECT * FROM prestamos WHERE idPrestamo = ?");
    $stmt->bindValue(1, $idPrestamo);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'prestamo');
    //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
    $prestamo = $stmt->fetch();

    ConexionBD::cerrar();

    return $prestamo;
}


public static function insertarPrestamo($prestamo) {
    $conexion = ConexionBD::conectar();

    //Consulta BBDD
    $stmt = $conexion->prepare("INSERT INTO prestamos (isbn,fecha_inicio, fecha_fin, estado, fk_libro,fk_usuario) 
                VALUES (?, ?, ?, ?, ?, ?, ?) " );
    $stmt->bindValue(1,$prestamo->getIsbn());
    $stmt->bindValue(2,$prestamo->getFecha_inicio());
    $stmt->bindValue(3,$prestamo->getFecha_fin());
    $stmt->bindValue(4,$prestamo->getEstado());
    $stmt->bindValue(5,$prestamo->getFk_libro());
    $stmt->bindValue(6,$prestamo->getFk_usuario());
   

    //echo $stmt->debugDumpParams();
    $stmt->execute();

    ConexionBD::cerrar();
}


}






?>