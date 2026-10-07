<?php 

require_once(__DIR__ . "/../../include/jogadoresList.php");
require_once(__DIR__ . "/../../model/Jogador.php");
require_once(__DIR__ . "/../../controller/JogadorController.php");

foreach($jogadores as $j){
    $jogador = new Jogador();
    $jogador->setNome($j["nome"]);
    $jogador->setPosicao($j["posicao"]);

    $jogadorCont = new JogadorController();
    $jogadorCont->inserir($jogador);
}

?>

