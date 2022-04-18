<?php

    class Aluno{
    private $nome;
    private $idade;
    private $genero;
    private $escolaridade;
    private $curso;


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
}

?>
