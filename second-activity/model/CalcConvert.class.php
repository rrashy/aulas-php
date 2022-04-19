<?php

class Convert
{
    public $valorDolar = 4.65;
    private $inputValor;

    public function getInputValor()
    {
        return $this->inputValor;
    }
    public function setInputValor($inputValor)
    {
        $this->inputValor = $inputValor;
    }
    
    function convertReal()
    {
        return $this->inputValor * $this->valorDolar;
    } 

}
?>