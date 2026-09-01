<?php
require_once(__DIR__ . "/../../controller/PersonagemController.php");
require_once(__DIR__ . "/../include/header.php");

$personagemCont = new PersonagemController();
$personagens = $personagemCont->listar();

?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Foto</th>
        <th>Nome</th>
        <th>Poder</th>
        <th>Arqui-inimigo</th>
        <th>Tipo</th>
        <th>Filme</th>
    </tr>

    <?php foreach ($personagens as $p) : ?>
        <tr>
            <td><?= $p->getID(); ?></td>
            <td><?= $p->getUrl(); ?></td>
            <td><?= $p->getNome(); ?></td>
            <td><?= $p->getPoder(); ?></td>
            <td><?= $p->getArquiInimigo(); ?></td>
            <td><?= $p->getTipo()->getNome(); ?></td>
            <td><?= $p->getFilme()->getTitulo(); ?></td>
        </tr>
    <?php endforeach ?> 
        
</table>

<?php

require_once(__DIR__ . "/../include/footer.php");

?>