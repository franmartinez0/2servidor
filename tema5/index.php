<?php


$dbh=null;
try {
    $dsn = "mysql:host=mariaDB;dbname=ejemplo";
    $dbh = new PDO($dsn, "usuario", "usuario");
} catch (PDOException $e){
    echo $e->getMessage();
}



//select--------------------------------------------------------------------------------------------
//metodo prepare sobre la conexion 
$stmt = $dbh->prepare("SELECT * FROM clientes");


//$stmt es un objeto PDOstatement
$stmt->execute();
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($clientes as $cliente){
    echo $cliente["nombre"]." ".$cliente["localidad"]. "<br>";
}
//fin del select---------------------------------------------------------------------------------------





//insert------------------------------------------------------------------------------------------------

// Prepare
$stmt = $dbh->prepare("INSERT INTO clientes (nombre, apellido, direccion, localidad, movil) VALUES (?, ?, ?, ?, ?)");
// Bind
$stmt->bindValue(1, "javi");
$stmt->bindValue(2, "guillen");
$stmt->bindValue(3, "mi casa");
$stmt->bindValue(4, "mojacar");
$stmt->bindValue(5, "652589785");
// Excecute
$stmt->execute();
//fin del insert-------------------------------------------------------------------------------------------






?>