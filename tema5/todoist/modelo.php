<?php

function existeUsuario(){
$conexion=conexionDB();



$conexion=null;//se cierrra la conexion
}


function conexionDB(){
    //se crea y devuelve la conexion a la base de datos
    $dbh = null;

    try {
        //mariadb es el nombre del contenedor que  
        $dsn = "mysql:host=mariadb;dbname=ejemplo";
        $dbh = new PDO($dsn, "usuario", "usuario");
    } catch (PDOException $e){
        echo $e->getMessage();
    }


    return $dbh;
}


?>