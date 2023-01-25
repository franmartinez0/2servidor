<?php
    class ValoracionBD {

        public static function apuntarValoracion($appid, $comentario) {
            $conexion = ConexionBD::conectar();
            
            $coleccion = $conexion->valoraciones;

            $insertOneResult = $coleccion->updateOne(
                ['idSerie' => intVal($appid)],
                ['$set' => ['comentario' => intVal($comentario)] ],
                ['upsert' => true]  //Inserta si no encuentra. Modifica si lo encuentra
            );

            ConexionBD::cerrar();

        }

        public static function getValoracion($appid) {
            $conexion = ConexionBD::conectar();
            
            $coleccion = $conexion->valoraciones;

            $valoracion = $coleccion->findOne(['idSerie' => intVal($appid)]);

            if ($valoracion == null)
                return "-";
            else
                return $valoracion['comentario'];
        }
    }

?>
