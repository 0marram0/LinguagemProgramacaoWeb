<?php

class Presidente {
    private $nome;
    private $numero;
    private $inicio;
    private $fim;

    public function __construct($num, $nome, $ini, $fim)
    {
        $this->numero = $num;
        $this->nome = $nome;
        $this->inicio = $ini;
        $this->fim = $fim;
    }

    
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getInicio()
    {
        return $this->inicio;
    }

    public function setInicio($inicio): self
    {
        $this->inicio = $inicio;

        return $this;
    }

    public function getFim()
    {
        return $this->fim;
    }

    public function setFim($fim): self
    {
        $this->fim = $fim;

        return $this;
    }
}