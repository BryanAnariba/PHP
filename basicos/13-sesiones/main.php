<?php
    session_start();
    echo 'Sesion Iniciada' . '<br>';
    if ( isset( $_SESSION ) && !empty( $_SESSION ) ) {
        echo 'Datos en sesion' . '<br>' . 'Nombre En Sesion: ' . $_SESSION[ 'NombreEnSesion' ] . '<br>' . 'Is Logueed: ' . $_SESSION[ 'EstaLogueado' ];
    } else {
        echo 'No hay Variables de sesion inicializadas';
    }