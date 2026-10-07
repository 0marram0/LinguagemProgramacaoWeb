<?php

require_once(__DIR__ . "/../jogador/inserir_jogadores.php");
require_once(__DIR__ . "/../../include/header.php");

?>

<div class="row">
    <div class="col-6">
        <form action="" method="POST">

            <label for="nomeTime">Nome: </label>
            <input type="text" id="nomeTime" name="nome">

            <label for="selFormacao">Formação: </label>
            <select name="formacao" id="selFormacao">
                <option value="">----Selecionar Formação----</option>
                <option value="343">3-4-3</option>
                <option value="3412">3-4-1-2</option>
                <option value="352">3-5-2</option>
                <option value="41212">4-1-2-1-2</option>
                <option value="4231">4-2-3-1</option>
                <option value="4312">4-3-1-2</option>
                <option value="433">4-3-3</option>
                <option value="442">4-4-2</option>
                <option value="451">4-5-1</option>
                <option value="532">5-3-2</option>
            </select>

            <button type="submit">Gerar Time</button>
        </form>

        <button><a href="alterar.php" onclick="return confirm('Tem certeza que deseja ressortear o time?')">Ressortear Time</a></button>

        <button><a href="remover.php" onclick="return confirm('Tem certeza que deseja excluir o time?')">Excluir Time</a></button>

        <?php if ($msgErro): ?>
            <div class="alert alert-danger mt-3 mb-0">
                <?= $msgErro ?>
            </div>
        <?php endif; ?>

    </div>

    <?php require_once(__DIR__ . "/exibir.php"); ?>
</div>

<?php

require_once(__DIR__ . "/../../include/footer.php");

?>