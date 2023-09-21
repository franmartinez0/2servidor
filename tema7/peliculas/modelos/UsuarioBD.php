<?php

    class UsuarioBD {

        public static function checkLogin($email, $password, &$usuario) {
            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE email = ?");
            $stmt->bindValue(1, $email);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario');
            $usuario = $stmt->fetch();

            $filas = $stmt->rowCount();

            //Si no devuelve filas es que el email no existe 
            if ($filas == 0) {
                return 0;
            } else {

                $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE email = ? AND password = ?");
                $stmt->bindValue(1, $email);
                $stmt->bindValue(2, $password);
                $stmt->execute();
    
                $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario');
                $usuario = $stmt->fetch();

                $filas = $stmt->rowCount();

                //Si no me devuelve ninguna fila el password es incorrecto
                if ($filas == 0) {
                    return 1;
                } else {
                    //Usuario existe y password correcto 
                    ConexionBD::cerrar();
                    return 2;
                }
            }

            ConexionBD::cerrar();

            return -1;
        }
    }


?>