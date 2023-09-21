<?php

    require_once './vendor/autoload.php';

    use MongoDB\Client;

    class ConexionBD {

        private static $conexion;


        public static function conectar($bd="misseries") {

            try {
               
                $host = "mongodb://root:toor@mongo:27017/"; //MongoDB en Docker
                self::$conexion = (new Client($host))->{$bd};
            } catch (Exception $e){
                echo $e->getMessage();
            }
            return self::$conexion;

        }

        public static function cerrar() {
            self::$conexion = null;
        }


    }













?>