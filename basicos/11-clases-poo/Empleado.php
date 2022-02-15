<?php
    include_once 'Persona.php';
    class Empleado extends Persona {
        private $cargoEmpleado;

        public function  __construct( $nombrePersona, $apellidoPersona, $edad )
        {
            $this->setNombrePersona( $nombrePersona );
            $this->setApellidoPersona( $apellidoPersona );
            $this->setEdad( $edad );
        }

        public function setCargoEmpleado ( $cargoEmpleado ) {
            $this->cargoEmpleado = $cargoEmpleado;
        }

        public function getCargoEmpleado () {
            return $this->cargoEmpleado;
        }
    }

    $empleado = new Empleado( 'Bryan', 'Anariba', 24 );
    $empleado->setCargoEmpleado( 'Ingeniero en Sistemas' );
    echo 'Datos persona';
    echo '<br>';
    //$empleado->setNombrePersona( 'Bryan Ariel' );
    echo $empleado->getNombrePersona();
    echo '<br>';
    //$empleado->setApellidoPersona( 'Sanchez Anariba' );
    echo $empleado->getApellidoPersona();
    echo '<br>';
    //$empleado->setEdad( 24 );
    echo $empleado->getEdad();
    echo '<br>';
    echo $empleado->getCargoEmpleado();

