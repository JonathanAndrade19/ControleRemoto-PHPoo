<?php 
require_once 'Controlador.php'
class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;

    function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    
    function getVolume()
    {
        return $this->volume;
    }

    function setVolume($volume)
    {
        $this->volume = $volume;
    }

    function getLigado()
    {
        return $this->ligado;
    }

    function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }

    function getTocando()
    {
        return $this->tocando;
    }
    function setTocando($tocando)
    {
        $this->tocando = $tocando;
    }

}