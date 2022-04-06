<?php

class Calculadora {
    private $valor1;
    private $valor2;

    public function getValor1() {
        return $this->valor1;
    }
    public function setValor1($valor1) {
        $this->valor1 = $valor1;
    }
    public function getValor2() {
        return $this->valor2;
    }
    public function setValor2($valor2) {
        $this->valor2 = $valor2;
    }
    // Creating calculator functions
    function somar() {
        return $this->valor1 + $this->valor2;
    }
    function subtrair() {
        return $this->valor1 - $this->valor2;
    }
    function multiplicar() {
        return $this->valor1 * $this-> valor2;
    }
    function dividir() {
        return $this->valor1 / $this-> valor2;
    }
}

?>