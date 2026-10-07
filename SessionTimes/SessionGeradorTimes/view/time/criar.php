<?php

require_once(__DIR__ . "/../../model/Time.php");
require_once(__DIR__ . "/../../controller/TimeController.php");

if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

$erros = [];
$msgErro = null;

if(isset($_POST["nome"])){
    if (! isset($_SESSION["time"])) {
        $nomeTime = trim($_POST["nome"]) ? trim($_POST["nome"]) : null;
        $formacaoTime = (isset($_POST["formacao"])) ? (int)$_POST["formacao"] : 0;

        $time = new Time($nomeTime, $formacaoTime);

        $timeCont = new TimeController();
        $erros = $timeCont->validar($time);

        if (empty($erros)) {
            $jogadoresTime = $timeCont->escolherJogadores($formacaoTime);
            $time->setJogadores($jogadoresTime);

            $_SESSION["time"] = $time;
        } else {
            $msgErro = implode("<br>", $erros);
        }

        
    } else if (isset($_SESSION["time"])) {
        array_push($erros, "Já existe um time nessa sessão!");
        $msgErro = implode("<br>", $erros);
    }
}

if (isset($_SESSION["msgErro"])) {
    array_push($erros, $_SESSION["msgErro"]);
    $msgErro = implode("<br>", $erros);
    unset($_SESSION["msgErro"]);
}

require_once(__DIR__ . "/form.php");

