<?php
    class CalculoIngresso{

        private $valorIngresso;// = 35;
        private $qtdIngresso;// = 2;
        private $desconto;// = 10;
        private $formaPagamento;// = "PIX";

        public function getValorIngresso()
        {
            return $this->valorIngresso;
        }
        public function setValorIngresso($valorIngresso)
        {
            $this->valorIngresso = $valorIngresso;
        }
        public function getQtdIngresso()
        {
            return $this->qtdIngresso;
        }
        public function setQtdIngresso($qtdIngresso)
        {
            $this->qtdIngresso = $qtdIngresso;
        }
        public function getDesconto()
        {
            return $this->desconto;
        }
        public function setDesconto($desconto)
        {
            $this->desconto = $desconto;
        }
        public function getFormaPagamento()
        {
            return $this->formaPagamento;
        }
        public function setFormaPagamento($formaPagamento)
        {
            $this->formaPagamento = $formaPagamento;
        }
    }