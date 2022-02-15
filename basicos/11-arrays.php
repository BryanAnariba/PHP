<?php
    // Arreglo Normaal
    echo '<br><br>' . '<strong>Ejemplo Arreglo Normal</strong>' . '<br>';
    $frutas = array( 'Pera', 'Melon', 'Manzana', 'Uva' );
    var_dump( $frutas );
    echo '<br><br>' . '<strong>Ejemplo Arreglo Normal</strong>' . '<br>';
    print_r( $frutas );

    // Arreglo asociativo
    echo '<br><br>' . '<strong>Ejemplo Arreglo Asociativo</strong>' . '<br>';
    $datosUsuario = array(
        [
            'nombrePersona' => 'Bryan Ariel',
            'apellidoPersona' => 'Sanchez Anariba',
            'edadPersona' => 24,
            'carrera' => 'Ingeniero en Sistemas'
        ],
        [
            'nombrePersona' => 'Erick Ariel',
            'apellidoPersona' => 'Sanchez Anariba',
            'edadPersona' => 20,
            'carrera' => 'Ingeniero Electrico'
        ],
    );
    print_r( $datosUsuario );


    // Imprimiendo arreglos
    echo '<br><br>';
    foreach( $frutas as $fruta ) {
        echo $fruta . '<br>'; 
    }

    echo '<br><br>';

    foreach ( $datosUsuario as $usuario ) {
        echo 'Nombre: ' . $usuario[ 'nombrePersona' ] . '<br>';
        echo 'Apellido: ' . $usuario[ 'apellidoPersona' ] . '<br>';
        echo 'Edad: ' . $usuario[ 'edadPersona' ] . '<br>';
        echo 'Carrera: ' . $usuario[ 'carrera' ] . '<br>';
    }




