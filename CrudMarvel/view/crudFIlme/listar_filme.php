<?php
require_once(__DIR__ . "/../../controller/FilmeController.php");
require_once(__DIR__ . "/../include/header.php");

$filmeCont = new FilmeController();
$filmes = $filmeCont->listar();

?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Capa</th>
        <th>Título</th>
        <th>Ano</th>
        <th>Duração</th>
        <th>Nota</th>
    </tr>

    <?php foreach ($filmes as $f) : ?>
        <tr>
            <td><?= $f->getId() ?></td>
            <td><?= $f->getUrl() ?></td>
            <td><?= $f->getTitulo() ?></td>
            <td><?= $f->getAnolancamento() ?></td>
            <td><?= $f->getDuracao() ?></td>
            <td><?= $f->getNota() ?></td>
        </tr>
    <?php endforeach ?>
</table>

<?php

require_once(__DIR__ . "/../include/footer.php");

?>