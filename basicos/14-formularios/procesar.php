<?php
    $data = (isset( $_POST ) && !empty( $_POST )) ? $_POST[ 'nombreUsuario' ] : 'No hay Informacion';
    echo $data;