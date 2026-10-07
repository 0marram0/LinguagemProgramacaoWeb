<?php

require_once(__DIR__ . "/../../model/Time.php");
require_once(__DIR__ . "/../../controller/TimeController.php");

if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

$erros = [];
$msgErro = null;

if (isset($_SESSION["time"])) {
    
    $_SESSION["time"]->setJogadores(null);
    
    $timeCont = new TimeController();
    $jogadoresTime = $timeCont->escolherJogadores($_SESSION["time"]->getFormacao());
    $_SESSION["time"]->setJogadores($jogadoresTime);

}  else {
    $_SESSION["msgErro"] = "Crie um time na sessão primeiro!";
}

header("Location: criar.php");
exit;