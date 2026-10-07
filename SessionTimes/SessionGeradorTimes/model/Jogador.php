<?php 

class Jogador {
    
    //Atributos
    private int $id;
    private string $nome;
    private string $posicao;

    //GET's & SET's
    
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPosicao(): string
    {
        return $this->posicao;
    }

    public function setPosicao(string $posicao): self
    {
        $this->posicao = $posicao;

        return $this;
    }
}