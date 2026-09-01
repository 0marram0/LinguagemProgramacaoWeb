<?php
require_once(__DIR__ . "/../../controller/TipoController.php");
require_once(__DIR__ . "/../../controller/FilmeController.php");
require_once(__DIR__ . "/../../controller/PersonagemController.php");
require_once(__DIR__ . "/../include/header.php");

$tipoCont = new TipoController();
$tipos = $tipoCont->listar();
print_r($tipos);


$filmeCont = new FilmeController();
$filmes = $filmeCont->listar();

$personagemCont = new PersonagemController();
$personagens = $personagemCont->listar();

?>

<form action="" method="POST">

    <div>
        <label for="url">Imagem: </label>
        <input type="text" id="url" placeholder="Informe a URL..." name="urlPersonagem">
    </div>

    <div>
        <label for="nome">Nome: </label>
        <input type="text" id="nome" placeholder="Informe o nome..." name="nomePersonagem">
    </div>

    <div>
        <label for="poder">Poder: </label>
        <input type="text" id="poder" placeholder="Informe o poder..." name="poderPersonagem">
    </div>

    <div>
        <label for="selArqui_inimigo ">Arqui-Inimigo: </label>
        <select id="selArqui_inimigo" name="selInimigoPersonagem">
            <?php foreach ($personagens as $p) : ?>
                <option value="<?= $p->getId() ?>"><?= $p->getNome() ?></option>
            <?php endforeach ?>
        </select>
    </div>

    <div>
        <label for="selTipo">Tipo: </label>
        <select id="selTipo" name="selTipo">
            <?php foreach ($tipos as $t) : ?>
                <option value="<?= $t->getId() ?>"><?= $t->getNome() ?></option>
            <?php endforeach ?>
        </select>
    </div>

    <div>
        <label for="selFilme">Filme: </label>
        <select id="selFilme" name="selFilme">
            <?php foreach ($filmes as $f) : ?>
                <option value="<?= $f->getId() ?>"><?= $f->getTitulo() ?></option>
            <?php endforeach ?>
        </select>
    </div>

    <button type="submit">Enviar</button>


</form>

<?php

require_once(__DIR__ . "/../include/footer.php");

?>