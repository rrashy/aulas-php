<?php

class CalcOldder
{
    private $idade;

    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    //
    function calcularIdadeEmMeses()
    {
        return $this->idade * 12;
    }
    function calcularIdadeEmSemanas()
    {
        return $this->idade * 52;
    }
    function calcularIdadeEmDias()
    {
        return $this->idade * 365;
    }
    function calcularIdadeEmHoras()
    {
        return $this->calcularIdadeEmDias() * 24;
    }
    function calcularIdadeEmMinutos()
    {
        return $this->calcularIdadeEmHoras() * 60;
    }
    function calcularIdadeEmSegundos()
    {
        return $this->calcularIdadeEmMinutos() * 60;
    }
    function __toString()
    {
        return nl2br("Idade inserida: " . $this->idade .
                    "<hr><br>Meses: " . $this->calcularIdadeEmMeses() .
                    "<br>Dias: " . $this->calcularIdadeEmDias() .
                    "<br>Semanas: " . $this->calcularIdadeEmSemanas() .
                    "<br>Horas: " . $this->calcularIdadeEmHoras() .
                    "<br>Minutos: " . $this->calcularIdadeEmMinutos() .
                    "<br>Segundos: " . $this->calcularIdadeEmSegundos());
    }
}
