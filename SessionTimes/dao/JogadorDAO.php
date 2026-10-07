<?php

require_once(__DIR__ . "/../util/Connection.php");

class JogadorDAO
{
    public function buscaPorNome (Jogador $jogador) {
        $conn = Connection::getConnection();

        $sql = "SELECT * FROM jogadores WHERE nome = ?";
        $stm = $conn->prepare($sql);
        $stm->execute([$jogador->getNome()]);

        $jogadorExiste = $stm->fetch();
        return $jogadorExiste;
    }

    public function buscaPorPosicao(string $posicao)
    {
        $conn = Connection::getConnection();

        $sql = "SELECT * FROM jogadores WHERE posicao = ?";
        $stm = $conn->prepare($sql);
        $stm->execute([$posicao]);

        $posicaoList = $stm->fetchAll();
        return $posicaoList; 
    }

    public function insert(Jogador $jogador)
    {
        $conn = Connection::getConnection();

        $sql = "INSERT INTO jogadores (nome, posicao) VALUES (?, ?)";
        $stm = $conn->prepare($sql);
        $stm->execute([
            $jogador->getNome(),
            $jogador->getPosicao()
        ]);
    }

    
}
