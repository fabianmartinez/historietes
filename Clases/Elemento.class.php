<?php
    class Elemento {

        private $Nombre;
        private $NumeroCapitulo;
        private $X;
        private $Y;

        function __construct($nombre, $numero, $x, $y) {
            $this->setNombre($nombre);
            $this->setNumeroCapitulo($numero);
            $this->setX($x);
            $this->setY($y);
        }

        function getNombre(){
            return $this->Nombre;
        }
        function getNumeroCapitulo(){
            return $this->NumeroCapitulo;
        }
        function getX(){
            return $this->X;
        }
        function getY(){
            return $this->Y;
        }
        function setNombre($nombre) {
            $this->Nombre=$nombre;	
        }
        function setNumeroCapitulo($numero) {
            $this->NumeroCapitulo=$numero;	
        }
        function setX($x) {
            $this->X=$x;
        }
        function setY($y) {
            $this->Y=$y;
        }
    }
?>