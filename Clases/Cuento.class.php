<?php

class cuento {

    private $idCuento;
    private $titulo;
    private $escenas = array();
    private $personajes = array();
    private $escenaActual = 0;

    function __construct($idCuento) {
        $this->setIdCuento($idCuento);
        for($i=0;$i<4;$i++){
            $this->setEscenas(new escena($i,$this->idCuento)) ;
        }    
        $this->setPersonajes = new personaje($this->idCuento);
    }

    function getIdCuento() {
        return $this->idCuento;
    }

    function setIdCuento($id) {
        $this->idCuento = $id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function getescenaActual() {
        return $this->$escenaActual;
    }

    function setMarcador($escenaActual) {
        $this->escenaActual = $escenaActual;
    }

    function getPersonajes($i) {
        $this->personajes[$i];
    }

    function setPersonajes($persona) {
        array_push($this->personajes, $persona);
    }

    function getEscenas($i) {
        $this->escenas[$i];
    }

    function setEscenas($escena) {
        array_push($this->escenas, $escena);
    }

}

?>