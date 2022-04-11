<?php

class Funcionario {

    private $valorHora;
    private $totalDeHoras;

    public function getTotalDeHoras()
    {
        return $this->totalDeHoras;
    }
    public function setTotalDeHoras($totalDeHoras)
    {
        $this->totalDeHoras = $totalDeHoras;
    }

    public function getValorHora()
    {
        return $this->valorHora;
    }
    public function setValorHora($valorHora)
    {
        $this->valorHora = $valorHora;
    }

    //funcao calcular salário
    function calcularSalario() {
        return $this->valorHora * $this->totalDeHoras;
    }
    function calcularVt(){
        return $this->calcularSalario() * 0.06;
    }
    function calcularIsalubridade() {
        return $this->calcularSalario() *0.3;
    }
    function salarioFinal() {
        return ($this->calcularSalario() - $this->calcularVt()) + $this->calcularIsalubridade();
    }

}

?>