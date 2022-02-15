<?php
    if ( isset( $_POST ) && !empty( $_POST ) ) {
        echo 'Nombre Completo de la persona => ' . $_POST['nombrePersona'] . ' ' . $_POST['apellidoPersona'];
    }