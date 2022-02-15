<?php
    if ( isset( $_POST ) && !empty( $_POST ) ) {
        switch ( $_POST['opcion'] ) {
            case empty( $_POST['opcion'] ) == false and $_POST['opcion'] == 'S':
                echo 'SUMA -> ' . ( $_POST['primeroNumero'] + $_POST['segundoNumero'] );
            break;
            case empty( $_POST['opcion'] ) == false and $_POST['opcion'] == 'R':
                echo 'RESTA -> ' . ( $_POST['primeroNumero'] - $_POST['segundoNumero'] );
            break;
            case empty( $_POST['opcion'] ) == false and $_POST['opcion'] == 'M':
                echo 'MULTIPLICACION -> ' . ( $_POST['primeroNumero'] * $_POST['segundoNumero'] );
            break;
            case empty( $_POST['opcion'] ) == false and $_POST['opcion'] == 'D':
                echo 'DIVISION -> ' . ( $_POST['primeroNumero'] / $_POST['segundoNumero'] );
            break;
        }
    }