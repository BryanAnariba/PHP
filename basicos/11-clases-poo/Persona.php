<?php
    class Persona {
        // Encapsulacion
        private $nombrePersona;
        private  $edad;
        protected $apellidoPersona;

        // Setters and Getters
        public function setNombrePersona( $nombrePersona ) {
            $this->nombrePersona = $nombrePersona;
        }

        public function getNombrePersona () {
            return $this->nombrePersona;
        }

        public function setEdad( $edad ) {
            $this->edad = $edad;
        }

        public function getEdad () {
            return $this->edad;
        }

        public function setApellidoPersona ( $apellidoPersona ) {
            $this->apellidoPersona = $apellidoPersona;
        }

        public function getApellidoPersona () {
            return $this->apellidoPersona;
        }
    }

    // Instancia de clase o creacion de un objeto
    //$alumno = new Persona();

    // Estableciento parametros
    // $alumno->setNombrePersona( 'Bryan Ariel' );
    // echo '<br>';
    // echo $alumno->getNombrePersona();

    // $alumnoDos = new Persona();
    // $alumnoDos->setNombrePersona( 'Erick David Jimenez Anariba' );
    // echo '<br>';
    // echo $alumnoDos->getNombrePersona();

    //echo $alumnoDos->edad; // Atributo privado no se puede acceder a no ser que sea por setter y getter
