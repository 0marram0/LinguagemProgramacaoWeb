<?php

require_once(__DIR__ . "/../dao/JogadorDAO.php");

class TimeService  {

    private JogadorDAO $jogadorDAO;
    private array $formacoes = [

        "343" => [
            "GOL" => 1,
            "ZAG" => 3,
            "VOL" => 1,
            "MC"  => 2,
            "MEI" => 1,
            "PE"  => 1,
            "ATA" => 1,
            "PD"  => 1
        ],

        "3412" => [
            "GOL" => 1,
            "ZAG" => 3,
            "VOL" => 2,
            "MC"  => 2,
            "MEI" => 1,
            "ATA" => 2
        ],

        "352" => [
            "GOL" => 1,
            "ZAG" => 3,
            "VOL" => 2,
            "MEI" => 1,
            "PE"  => 1,
            "ATA" => 2,
            "PD"  => 1
        ],

        "41212" => [
            "GOL" => 1,
            "LE"  => 1,
            "ZAG" => 2,
            "LD"  => 1,
            "VOL" => 1,
            "MC"  => 2,
            "MEI" => 1,
            "ATA" => 2
        ],

        "4231" => [
            "GOL" => 1,
            "LE"  => 1,
            "ZAG" => 2,
            "LD"  => 1,     
            "VOL" => 2,
            "MEI" => 1,  
            "PE"  => 1,
            "ATA" => 1,
            "PD"  => 1
        ],

        "4312" => [
            "GOL" => 1,
            "LE"  => 1,
            "ZAG" => 2,
            "LD"  => 1,
            "MC"  => 3,
            "MEI" => 1,
            "ATA" => 2
        ],

        "433" => [
            "GOL" => 1,
            "LE"  => 1,
            "ZAG" => 2,
            "LD"  => 1,
            "VOL" => 1,
            "MC"  => 1,
            "MEI" => 1,           
            "PE"  => 1,
            "ATA" => 1,
            "PD"  => 1
        ],

        "442" => [
            "GOL" => 1,
            "LE"  => 1,
            "ZAG" => 2,
            "LD"  => 1,
            "VOL" => 2,
            "MC"  => 2,
            "ATA" => 2
        ],

        "451" => [
            "GOL" => 1,
            "LE"  => 1,
            "ZAG" => 2,
            "LD"  => 1,
            "VOL" => 1,
            "MC"  => 2,
            "PE"  => 1,
            "ATA" => 1,
            "PD"  => 1
        ],

        "532" => [
            "GOL" => 1,
            "LE"  => 1,
            "ZAG" => 3,
            "LD"  => 1,
            "MC"  => 3,
            "ATA" => 2
        ]
    ];

    public function __construct()
    {
        $this->jogadorDAO = new JogadorDAO();
    }

    public function validar (Time $time) {
        $erros = array();

        if (! $time->getNome()) {
            array_push($erros, "Informe o nome do time!");
        }

        if (! $time->getFormacao()) {
            array_push($erros, "Selecione a formação do time!");
        }

        return $erros;
    }
 
    public function montarTime(int $formacao){
        $formacaoEscolhida = $this->formacoes[$formacao];
        $jogadoresTime = array();

        foreach ($formacaoEscolhida as $posicao => $quantidade) {
            $jogadoresPosicao = $this->jogadorDAO->buscaPorPosicao($posicao);
            shuffle($jogadoresPosicao);
            $jogadoresTime[$posicao] = array_slice($jogadoresPosicao, 0, $quantidade);
        }

        return $jogadoresTime;
    }
}