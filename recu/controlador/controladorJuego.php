<?php
    class ControladorJuegos{

        public static function mostrarJuego() {
            VistaJuego::mostrarJuego($appid);
        }

        
        public static function mostrarNoticia() {
            VistaNoticia::mostrarNoticia($id);
        }


        public static function votarJuego($id, $valor) {
            //Llamar al modelo para insertar esto
            ValoracionBD::apuntarValoracion($id, $valor);
            $nota = ValoracionBD::getValoracion($id);
            VistaJuegos                                      ::mostrarSerieAPI($id, $nota);
        }

    }
?>