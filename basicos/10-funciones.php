<?php
    setlocale(LC_ALL,"es_HN");
    function imprimirNombre ( $nombrePersona, $apellidoPersona ) {
        // Rutinas o instrucciones
        echo 'Hola ' . strtoupper( $nombrePersona )  . ' ' . strtoupper( $apellidoPersona );
    }

    imprimirNombre( 'Bryan', 'Sanchez' );
    echo '<br>';
    imprimirNombre( 'Erick', 'Sanchez' );
    echo '<br>';
    imprimirNombre( 'Maria', 'Sanchez' );

    // Funciones de Fecha
    //2022-02-13
    $hoy = date( 'Y-m-d' );
    echo '<br>';
    echo $hoy;
    // dia
    $hoy = date( 'd' ); // dia
    echo '<br>';
    echo strftime( date( 'Y-m-d' ) );

    // Esta función te va a devolver como resultado: Sunday, 26 Jan 2020
    echo '<br>';
    echo date('l, d M Y');


    // Resultado: domingo 26 de enero del 2020
    echo '<br>';
    echo strftime("%A %d de %B del %Y");


    // Resultado: dia en letras
    echo '<br>';
    echo strftime("%A");

    

