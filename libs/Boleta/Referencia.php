<?php
namespace BOLETA_SERIALIZACION;
class Referencia{
    public $NroLinRef;
    public $CodRef; 
    public $RazonRef;
    public $CodVndor;
    public $CodCaja;
    
    function getNroLinRef() {
        return $this->NroLinRef;
    }

    function getCodRef() {
        return $this->CodRef;
    }

    function getRazonRef() {
        return $this->RazonRef;
    }

    function getCodVndor() {
        return $this->CodVndor;
    }

    function getCodCaja() {
        return $this->CodCaja;
    }

    function setNroLinRef($NroLinRef) {
        $this->NroLinRef = $NroLinRef;
    }

    function setCodRef($CodRef) {
        $this->CodRef = $CodRef;
    }

    function setRazonRef($RazonRef) {
        $this->RazonRef = $RazonRef;
    }

    function setCodVndor($CodVndor) {
        $this->CodVndor = $CodVndor;
    }

    function setCodCaja($CodCaja) {
        $this->CodCaja = $CodCaja;
    }

    
}