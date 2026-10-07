<?php

class Time {

    //Atributos
    private ?string $nome;
    private ?int $formacao;
    private ?array $jogadores = array();

    //Métodos
    public function __construct(?string $nome, ?int $formacao){
        $this->nome = $nome;
        $this->formacao = $formacao;
    }

    //GET's & SET's

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(?string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getFormacao(): ?int
    {
        return $this->formacao;
    }

    public function setFormacao(?int $formacao): self
    {
        $this->formacao = $formacao;

        return $this;
    }

    public function getJogadores(): ?array
    {
        return $this->jogadores;
    }

    public function setJogadores(?array $jogadores): self
    {
        $this->jogadores = $jogadores;

        return $this;
    }
}