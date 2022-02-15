<?php
    if ( isset( $_GET ) && !empty( $_GET ) ) {
        echo 'Informacion mandada por el metodo get desde el formulario html => ' . $_GET['nombrePersona'];
    }