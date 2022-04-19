<?php

    class Aluno{
    private $nome;
    private $idade;
    private $genero;
    private $escolaridade;
    private $curso;

    // construtor vazio - (?)
    function __construct()
    {
        
    }


    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getGenero()
    {
        return $this->genero;
    }
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    public function getEscolaridade()
    {
        return $this->escolaridade;
    }
    public function setEscolaridade($escolaridade)
    {
        $this->escolaridade = $escolaridade;
    }
    public function getCurso()
    {
        return $this->curso;
    }
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

    function calcIdade(){
        return $this->idade * 12;
    }

    function __toString()
    {
        return nl2br(
            "nome: $this->nome
             idade: $this->nome
             idade em meses: {$this->calcIdade()}"
        );
    }
}

?>
