<?php

class Filme {

    private ?int $id;
    private ?string $url;
    private ?string $titulo;
    private ?int $ano_lancamento;
    private ?int $duracao;
    private ?float $nota;
    
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
    
    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(?string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAnoLancamento(): ?int
    {
        return $this->ano_lancamento;
    }

    public function setAnoLancamento(?int $ano_lancamento): self
    {
        $this->ano_lancamento = $ano_lancamento;

        return $this;
    }

    public function getDuracao(): ?int
    {
        return $this->duracao;
    }

    public function setDuracao(?int $duracao): self
    {
        $this->duracao = $duracao;

        return $this;
    }

    public function getNota(): ?float
    {
        return $this->nota;
    }

    public function setNota(?float $nota): self
    {
        $this->nota = $nota;

        return $this;
    }
}



?>