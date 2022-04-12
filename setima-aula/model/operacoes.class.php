<?php

    class Operacoes {

        private $valorA;
        private $valorB;
        private $valorC;
        private $valorD;

        //valor a
        public function getValorA()
        {
            return $this->valorA;
        }
        public function setValorA($valorA)
        {
            $this->valorA = $valorA;
        }

        //valor b
        public function getValorB()
        {
            return $this->valorB;
        }
        public function setValorB($valorB)
        {
            $this->valorB = $valorB;
        }

        //valor c
        public function getValorC()
        {
            return $this->valorC;
        }
        public function setValorC($valorC)
        {
            $this->valorC = $valorC;
        }

        //valor d
        public function getValorD()
        {
                return $this->valorD;
        }
        public function setValorD($valorD)
        {
                $this->valorD = $valorD;
        }

    //Maior numero
    function testarValores () {
        if(($this->valorA > $this->valorB) && ($this->valorA > $this->valorC)){
            echo "Valor de A é maior valor digitado";
        }else if (($this->valorB > $this->valorB) && ($this->valorB > $this->valorC)){
            echo "Valor B é o maior valor digitado";
        }
        else {
            echo "Valor C é o maior valor digitado";
        }
    }
     
    //Par ou impar 
    // % = Modulo ou resto da Divisão
    function testarParImpar() {
        if($this->valorD %2 == 0){
            echo "O valor é PAR: ".$this->valorD;
        }
        else {
            echo "O valor é ÍMPAR: ".$this->valorD;
        }
    }
}// fim
?>