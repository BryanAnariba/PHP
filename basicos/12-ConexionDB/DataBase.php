<?php
    require_once 'Config.php';
    class DataBase {

        public static function connect () {
            try {
                // Instancia de la conexion
                $conn = new PDO( "mysql:host=" . SERVER . ';dbname=' . DBNAME, USER, PASSWORD );

                // ACCEDER A LOR ERRORES, Y EXECPECIONES
                $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                return $conn;
                //echo 'MySQL is connected ';
            } catch ( PDOException $ex ) {
                //echo 'Fail MySQL Connection ' . $ex;
                // Cerramos conexion
                $conn = null;
                die();
            }
        }
    }

    // Testeamos la conexion
    //DataBase::connect(); 

    // CREATE TABLE `albumdb`.`fotos` ( `Id` INT NOT NULL AUTO_INCREMENT , `Nombre` VARCHAR(80) NOT NULL , `Path` VARCHAR(255) NOT NULL , PRIMARY KEY (`Id`)) ENGINE = InnoDB;