<?php
class librosDB{

public static function getLibros(){
    $conexion= ConexionBD::conectar();


    //realizamos la cocnsulta en la BBDD
    $stmt = $conexion->prepare("SELECT * FROM libros");

            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $libros = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'libro');

            ConexionBD::cerrar();

            return $libros;
}

public static function getLibro($idLibro) {
    $conexion = ConexionBD::conectar();

    //Consulta BBDD
    $stmt = $conexion->prepare("SELECT * FROM libros WHERE idLibro = ?");
    $stmt->bindValue(1, $idLibro);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'libro');
    //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
    $libro = $stmt->fetch();

    ConexionBD::cerrar();

    return $libro;
}


public static function insertarLibro($libro) {
    $conexion = ConexionBD::conectar();

    //Consulta BBDD
    $stmt = $conexion->prepare("INSERT INTO libros (isbn,titulo,subtitulo,descripcion,autor,editorial,categoria,imagen,stock,disponible) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?) " );
    $stmt->bindValue(1,$libro->getIsbn());
    $stmt->bindValue(2,$libro->getTitulo());
    $stmt->bindValue(3,$libro->getSubtitulo());
    $stmt->bindValue(4,$libro->getDescripcion());
    $stmt->bindValue(5,$libro->getAutor());
    $stmt->bindValue(6,$libro->getEditorial());
    $stmt->bindValue(7,$libro->getCategoria());
    $stmt->bindValue(8,$libro->getImagen());
    $stmt->bindValue(9,$libro->getStock());
    $stmt->bindValue(10,$libro->getDisponible());


    //echo $stmt->debugDumpParams();
    $stmt->execute();

    ConexionBD::cerrar();
}


}






?>