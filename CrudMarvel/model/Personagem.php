<?php

require_once(__DIR__ . "/Tipo.php");
require_once(__DIR__ . "/Filme.php");

class Personagem {
    
    private ?int $id;
    private ?string $url;
    private ?string $nome;
    private ?string $poder;
    private ?string $arqui_inimigo;
    private ?Tipo $tipo;
    private ?Filme $filme;
    
    //GET's & SET's

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(?string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPoder(): ?string
    {
        return $this->poder;
    }

    public function setPoder(?string $poder): self
    {
        $this->poder = $poder;

        return $this;
    }

    public function getArquiInimigo(): ?string
    {
        return $this->arqui_inimigo;
    }

    public function setArquiInimigo(?string $arqui_inimigo): self
    {
        $this->arqui_inimigo = $arqui_inimigo;

        return $this;
    }

    public function getTipo(): ?Tipo
    {
        return $this->tipo;
    }

    public function setTipo(?Tipo $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getFilme(): ?Filme
    {
        return $this->filme;
    }

    public function setFilme(?Filme $filme): self
    {
        $this->filme = $filme;

        return $this;
    }
}

?>