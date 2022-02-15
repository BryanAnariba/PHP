<?php
    class UnaClase {
        public static function miMetodoEstatico () {
            echo 'Hola Soy un Metodo Estatico';
        }
    }
    // $obj = new UnaClase();
    // $obj->miMetodoEstatico();

    // Los metodos estaticos no necesitan instancia solo los ::
    UnaClase::miMetodoEstatico();

    //03:00
