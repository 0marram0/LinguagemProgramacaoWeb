
<?php

session_start(); //Pra salvar o numero sorteado até que ocorra o acerto

if (!isset($_SESSION['sorteio'])) {
    $_SESSION['sorteio'] = rand(1, 7);
}

require_once "model/Jogador.php";

$cristiano = new Jogador;
$cristiano->setNome("Cristiano Ronaldo")->setNacionalidade("Português")->setLiga("Liga Árabe")->setTime("Al Nasr")->setLink("https://www.ogol.com.br/img/jogadores/new/15/79/1579_cristiano_ronaldo_20250611112712.png");

$messi = new Jogador;
$messi->setNome("Lionel Messi")->setNacionalidade("Argentino")->setLiga("MLS")->setTime("Inter Miami")->setLink("https://www.ogol.com.br/img/jogadores/new/05/92/10592_lionel_messi_20250615120609.png");

$haaland = new Jogador;
$haaland->setNome("Erling Haaland")->setNacionalidade("Norueguês")->setLiga("Premier League")->setTime("Manchester City")->setLink("https://www.ogol.com.br/img/jogadores/new/27/41/512741_erling_haaland_20251110124706.png");

$tomiyasu = new Jogador;
$tomiyasu->setNome("Takehiro Tomiyasu")->setNacionalidade("Japônes")->setLiga("Eredvise")->setTime("Ajax")->setLink("https://www.ogol.com.br/img/jogadores/new/24/55/472455_takehiro_tomiyasu_20240817003407.png");

$pope = new Jogador;
$pope->setNome("Nick Pope")->setNacionalidade("Inglês")->setLiga("Premier League")->setTime("Newcastle")->setLink("https://www.ogol.com.br/img/jogadores/new/02/27/210227_nick_pope_20251021194405.png");

$solet = new Jogador;
$solet->setNome("Oumar Solet")->setNacionalidade("Francês")->setLiga("Série A TIM")->setTime("Udinese")->setLink("https://www.ogol.com.br/img/jogadores/new/04/38/570438_oumar_solet_20260208225720.png");

$odriozola = new Jogador;
$odriozola->setNome("Álvaro Odriozola")->setNacionalidade("Espanhol")->setLiga("La Liga")->setTime("Real Sociedad")->setLink("https://www.ogol.com.br/img/jogadores/new/09/65/370965_alvaro_odriozola_20250929145557.png");


$jogadores = [
    1 => $cristiano,
    2 => $messi,
    3 => $haaland,
    4 => $tomiyasu,
    5 => $pope,
    6 => $solet,
    7 => $odriozola
];

$jogadorCerto = $jogadores[$_SESSION['sorteio']];

$dicas = [
    "Esse jogador é " . $jogadorCerto->getNacionalidade(),
    "Ele joga na " . $jogadorCerto->getLiga(),
    "Ele joga pelo " . $jogadorCerto->getTime()
];

$dicaSorteada = $dicas[array_rand($dicas)];

if (isset($_GET['palpite']) && $_GET['palpite'] != "") {

    $palpite = $_GET['palpite'];
    $jogadorTentado = $jogadores[$palpite];

    if ($palpite == $_SESSION['sorteio']) {
        echo "<h1>Você acertou!!!</h1>";
        echo "<img src='" . $jogadorCerto->getLink() . "' alt='" . $jogadorCerto->getNome() . "'>";
        echo "<p>Nome: " . $jogadorCerto->getNome() . "</p>";
        echo "<p>Nacionalidade: " . $jogadorCerto->getNacionalidade() . "</p>";
        echo "<p>Liga: " . $jogadorCerto->getLiga() . "</p>";
        echo "<p>Time: " . $jogadorCerto->getTime() . "</p>";

        unset($_SESSION['sorteio']);
    } else {
        echo "<h1>Você errou!!!</h1>";
        echo "<h2>Seu jogador:</h2>";
        echo "<img src='" . $jogadorTentado->getLink() . "' alt='" . $jogadorTentado->getNome() . "'>";
        echo "<p>Nome: " . $jogadorTentado->getNome() . "</p>";
        echo "<p>Nacionalidade: " . $jogadorTentado->getNacionalidade() . "</p>";
        echo "<p>Liga: " . $jogadorTentado->getLiga() . "</p>";
        echo "<p>Time: " . $jogadorTentado->getTime() . "</p>";
        echo "<h2>Dica do jogador certo:</h2>";
        echo "<p>" . $dicaSorteada . "</p>";
    }
} else {
    echo "Digite o palpite.";
}
