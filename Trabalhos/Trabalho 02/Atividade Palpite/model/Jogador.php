<?php

class Jogador {

    //Atributos
    private $nome;
    private $nacionalidade;
    private $liga;
    private $time;
    private $link;

    //GETs e SETs
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade): self
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    public function getLiga()
    {
        return $this->liga;
    }

    public function setLiga($liga): self
    {
        $this->liga = $liga;

        return $this;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function setTime($time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link): self
    {
        $this->link = $link;

        return $this;
    }
}