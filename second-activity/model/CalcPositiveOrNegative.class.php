<?php
class CalcPositiveOrNegative
{
    private $valorInput;


    public function getValorInput()
    {
        return $this->valorInput;
    }
    public function setValorInput($valorInput)
    {
        $this->valorInput = $valorInput;
    }
    function negOrPos()
    {
        if ($this->valorInput % 2 == 0) {
            echo "<h1>Número digitado é positivo: " . $this->valorInput . "</h1>";
        } else {
            echo "<h1>Número digitado é negativo: " . $this->valorInput . "</h1>";
        }
    }
}
