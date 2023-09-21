<?php
class categoriasDB{

public static function getCategorias(){
    $conexion= ConexionBD::conectar();


    //realizamos la cocnsulta en la BBDD
    $stmt = $conexion->prepare("SELECT * FROM categorias");

            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $categorias = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'categoria');

            ConexionBD::cerrar();

            return $categorias;
}

public static function getCAtegoria($idCategoria) {
    $conexion = ConexionBD::conectar();

    //Consulta BBDD
    $stmt = $conexion->prepare("SELECT * FROM categoria WHERE idCategoria = ?");
    $stmt->bindValue(1, $idCategoria);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'categoria');
    //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
    $categoria = $stmt->fetch();

    ConexionBD::cerrar();

    return $categoria;
}


public static function insertarCategoria($categoria) {
    $conexion = ConexionBD::conectar();

    //Consulta BBDD
    $stmt = $conexion->prepare("INSERT INTO categorias (idCategoria,nombre) 
                VALUES (?, ?) " );
    $stmt->bindValue(1,$categoria->getIdCategoria());
    $stmt->bindValue(2,$categoria->getNombre());
   
   

    //echo $stmt->debugDumpParams();
    $stmt->execute();

    ConexionBD::cerrar();
}





public static function borrarCategoria($idCategoria) {
    $conexion = ConexionBD::conectar("categorias");

    $stmt = $conexion->prepare("DELETE FROM categorias WHERE idCAtegoria = :idCategoria");
    // Bind
    $stmt->bindValue(":idCategoria", $idCategoria);
    // Ejecuta la consulta
    $stmt->execute();

    ConexionBD::cerrar();
}
}

?>