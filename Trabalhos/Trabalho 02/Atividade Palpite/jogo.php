<?php

require_once "model/Jogador.php";

$cristiano = new Jogador;
$cristiano -> setNome("Cristiano Ronaldo");
$cristiano -> setNacionalidade("Português");
$cristiano -> setLiga("Liga Árabe");
$cristiano -> setTime("Al Nasr");
$cristiano -> setLink("https://www.ogol.com.br/img/jogadores/new/15/79/1579_cristiano_ronaldo_20250611112712.png");

$messi = new Jogador;
$messi -> setNome("Lionel Messi");
$messi -> setNacionalidade("Argentino");
$messi -> setLiga("MLS");
$messi -> setTime("Inter Miami");
$messi -> setLink("https://img.a.transfermarkt.technology/portrait/big/28003-1771694720.jpg?lm=1");

$haaland = new Jogador;
$haaland -> setNome("Erling Haaland");
$haaland -> setNacionalidade("Norueguês");
$haaland -> setLiga("Premier League");
$haaland -> setTime("Manchester City");
$haaland -> setLink("https://www.ogol.com.br/img/jogadores/new/27/41/512741_erling_haaland_20251110124706.png");

$jogadores = array($cristiano, $messi, $haaland);

$certo = ($jogadores[rand(0,2)]);

if (isset($_GET['nome']) && $_GET['nome'] != ""){
    if ($_GET['nome'] == $certo->getNome()) {
        echo "Você acertou!";
    } else {
        echo "Você errou!";
    }
} else {
    echo "Digite o nome.";
}

