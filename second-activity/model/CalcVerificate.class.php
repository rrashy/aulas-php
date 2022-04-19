<?php
class CalcVerificate
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
    function verificadorNum()
    {
        if ($this->valorInput > 0) {
            return "<h1>Número digitado é positivo: " . $this->valorInput . "</h1>";
        }else if($this->valorInput < 0) {
            return "<h1>Número digitado é negativo: " . $this->valorInput . "</h1>";
        }else {
            return "<h1>Número digitado é nulo</h1>";
        }
    }
}
