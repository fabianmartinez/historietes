<?php

require_once 'Elementos.class.php';

class Escena{
    private $numCapitulo;
    private $idCuento;
    private $fondo1;
    private $fondo2;
    private $fondo3;
    private $elementos=array();
    
    function __construct($numCapitulo,$idCuento){
        $this->setidCuento($numCapitulo,$idCuento);
    }
    
    function setCapitulo($numCapitulo){
        $this->numCapitulo=$numCapitulo;
    }
    
    function getCapitulo(){
        return $this->numCapitulo;
    }
    
    function setIdCuento($idCuento){
        $this->idCuento=$idCuento;
    }
    
    function getIdCuento(){
        return $this->idCuento;
    }
    
}

?>