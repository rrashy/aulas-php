<?php
class Funcionario {
    private $name;
    private $salarioFixo;
    private $valorVendas;
    private $comissao;

// -> Nome [?]
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

// -> Salario Fixo R$ 2200,00
    public function getSalarioFixo()
    {
        return $this->salarioFixo;
    }
    public function setSalarioFixo($salarioFixo)
    {
        $this->salarioFixo = $salarioFixo;
    }

// -> Valor de vendas R$ 1975,00
    public function getValorVendas()
    {
        return $this->valorVendas;
    }
    public function setValorVendas($valorVendas)
    {
        $this->valorVendas = $valorVendas;
    }

// -> Valor de comissão funcionario 3%
    public function getComissao()
    {
        return $this->comissao;
    }
    public function setComissao($comissao)
    {
        $this->comissao = $comissao;
    }
    // Valor com comissao 59.25
}
?>