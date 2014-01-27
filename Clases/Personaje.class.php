<?php
    class Personaje {

        private $Nombre;
        private $IdCuento;

        function __construct($nombre, $idcuento) {
            $this->setNombre($nombre);
            $this->setIdCuento($idcuento);
        }

        function getNombre(){
            return $this->Nombre;
        }
        function getIdCuento(){
            return $this->idCuento;
        }
        function setNombre($nombre) {
            $this->Nombre=$nombre;	
        }
        function setIdCuento($idcuento) {
            $this->IdCuento=$idcuento;	
        }
    }
?>