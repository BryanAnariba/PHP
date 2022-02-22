<?php
    require_once 'DataBase.php';
    class CrudOperations {
        private $Nombre;
        private $Path;
        public function __construct( $Nombre, $Path ) {
            $this->Nombre = $Nombre;
            $this->Path = $Path;
        }

        public function Insert () {
            $insert = DataBase::connect()->prepare( 'INSERT INTO FOTOS ( Nombre, Path ) VALUES ( :Nombre, :Path ) ' );
            $insert->bindValue( ':Nombre', $this->Nombre );
            $insert->bindValue( ':Path', $this->Path );

            if ( $insert->execute() ) {
                echo 'Registro insertado exitosamente -> ' . $insert->rowCount();
            } else {
                echo 'Ha Ocurrido un error con la insercion ';
            }
        }

        public function select () {
            $select = DataBase::connect()->prepare( 'SELECT * FROM Fotos;' );

            if ( $select->execute() ) {
                //echo json_encode( $select->fetchAll( PDO::FETCH_OBJ ) );
                //echo '<br>';
                $fotos = $select->fetchAll();
                foreach ( $fotos as $foto ) {
                    echo  $foto[ 'Nombre' ] . ' -> ' . $foto[ 'Path' ] . ' -> ' . $foto[ 'Id' ] . '<br>'; 
                }
            } else {
                echo 'Internal server error';
            }
        }


    }

    $crud = new CrudOperations( 'Erick David', 'Mi PATH 2' );
    //$crud->Insert();
    $crud->select();