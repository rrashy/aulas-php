<?php

    // Inicio da classe
    class Produto {
        // Atributos classe
        private $name;
        private $valor;
        private $quantidade;

        // Metodos da classe
        public function setName($name) {
            $this->name = $name;
        }
        public function getName() {
            return $this->name;
        }
        // Valor
        public function setValor($valor) {
            $this->valor = $valor;
        }
        public function getValor() {
            return $this->valor;
        }
        // quantidade
        public function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
        }
        public function getQuantidade() {
            return $this->quantidade;
        }
        // Calculo valor total compra
        public function calcularTotal() {
            return $this->valor * $this->quantidade;
        }

    }// Fim da classe
    // instanciar o objeto - cria-lo
    $prod = new Produto;
    // enviando para memória
    $prod->setName("Monitor 27 AOC'");
    $prod->setValor(1500);
    $prod->setQuantidade(5);

    echo "<h1>Nome: ".$prod->getName()."</h1>".
         "<h4>Valor R$: ".$prod->getValor()."</h4>".
         "<h4>Quantidade: ".$prod->getQuantidade()."</h4>".
         "<h4>Valor total da compra R$: ".$prod->calcularTotal()."</h4>";
?>