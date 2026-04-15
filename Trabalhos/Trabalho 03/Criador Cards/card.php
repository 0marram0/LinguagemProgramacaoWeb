<?php

require_once("model/Card.php");

if (isset($_POST["nome"]) && !empty($_POST["nome"]) && isset($_POST["capacidade"]) && !empty($_POST["capacidade"]) && isset($_POST["desc"]) && !empty($_POST["desc"]) && isset($_POST["img"]) && !empty($_POST["img"])) {
    
    $nome = $_POST["nome"];
    $capacidade = $_POST["capacidade"];
    $desc = $_POST["desc"];
    $imgLink = $_POST["img"];

    $card = new Card($nome, $capacidade, $desc, $imgLink);
} else {
    echo "Preencha todos os campos corretamente!";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <h1>Estádio de Futebol</h1>

    <div class="card">
        <img class="card-img" src="<?= $card->getImgLink() ?>" alt="<?= $card->getNome() ?>">
        <h2 class="card-title"><?= $card->getNome() ?></h2>
        <p class="card-desc"><?= $card->getDesc() ?></p>
        <p class="card-capacidade"><?= $card->getCapacidade() ?> torcedores</p>
    </div>
</body>

</html>