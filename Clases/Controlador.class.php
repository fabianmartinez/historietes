<?php

    require_once 'Cuentos.class.php';

    class Controlador {

        private $Cuento;
        private $numCapitulo;

        function __construct() {
        }

        function iniciaCuento($numcuento) {
            $this->Cuento = new cuentos($numcuento);
            $this->numCapitulo = $this->Cuento->getMarcador();
        }

        function sigEscena() {
            $this->numCapitulo++;
        }

        function antEscena() {
            $this->numCapitulo--;
        }

    }

?>