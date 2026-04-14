<?php

require_once("model/Card.php");

if (isset($_POST["nome"]) && !empty($_POST["nome"]) && isset($_POST["desc"]) && !empty($_POST["desc"]) && isset($_POST["img"]) && !empty($_POST["img"])) {
    
    $nome = $_POST["nome"];
    $desc = $_POST["desc"];
    $imgLink = $_POST["img"];

    $card = new Card($nome, $desc, $imgLink);
} else {
    echo "Preencha todos os campos!";
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

    <h1>Seu Card</h1>

    <div class="card">
        <img class="card-img" src="<?= $card->getImgLink() ?>" alt="<?= $card->getNome() ?>">
        <h2 class="card-title"><?= $card->getNome() ?></h2>
        <p class="card-desc"><?= $card->getDesc() ?></p>
    </div>
</body>

</html>