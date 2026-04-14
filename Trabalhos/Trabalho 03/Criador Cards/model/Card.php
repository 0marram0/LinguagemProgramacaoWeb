<?php

class Card {

    //Atributos
    private $nome;
    private $desc;
    private $imgLink;

    //Métodos
    public function __construct($n, $d, $i){
        $this->nome = $n;
        $this->desc = $d;
        $this->imgLink = $i;
    }

    //GET's & SET's
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function setDesc($desc): self
    {
        $this->desc = $desc;

        return $this;
    }

    public function getImgLink()
    {
        return $this->imgLink;
    }

    public function setImgLink($imgLink): self
    {
        $this->imgLink = $imgLink;

        return $this;
    }
}

?>