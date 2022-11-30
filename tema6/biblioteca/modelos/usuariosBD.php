<?php

    class usuariosBD {

        public static function getUsuarios() {

            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM Usuarios");

            $stmt->execute();

            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $usuarios = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'usuario');

            ConexionBD::cerrar();

            return $usuarios;

        }

        public static function getUsuario($idUsuario) {
            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM Usuarios WHERE idUsuario=?");
            $stmt->bindValue(1, $idUsuario);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'usuario');
            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $usuario = $stmt->fetch();

            ConexionBD::cerrar();

            return $usuario;
        }

        
        public static function insertarUsuario($usuario) {
            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("INSERT INTO Usuarios (idUsuario,nombre,apellido,edad,direccion,poblacion,telefono) 
                        VALUES (?, ?, ?, ?, ?, ?, ?) " );
            $stmt->bindValue(1,$usuario->getIdUsuario());
            $stmt->bindValue(2,$usuario->getNombre());
            $stmt->bindValue(3,$usuario->getApellido());
            $stmt->bindValue(4,$usuario->getEdad());
            $stmt->bindValue(5,$usuario->getDireccion());
            $stmt->bindValue(6,$usuario->getPoblacion());
            $stmt->bindValue(7,$usuario->getTelefono());

            //echo $stmt->debugDumpParams();
            $stmt->execute();

            ConexionBD::cerrar();
        }


    }