<?php
require_once(__DIR__ . "/../include/header.php");

?>
    
    <form action="" method="POST">
        
        <div>
            <label for="url">Capa do Filme: </label>
            <input type="text" id="url" placeholder="Informe a URL..." name="urlFilme">
        </div>

        <div>
            <label for="titulo">Título: </label>
            <input type="text" id="titulo" placeholder="Informe o título..." name="tituloFilme">
        </div>

        <div>
            <label for="ano_lancamento">Ano de lançamento: </label>
            <input type="int" id="ano_lancamento" placeholder="Ex: 2009" name="anoFilme">
        </div>

        <div>
            <label for="duracao">Duração do filme (em minutos): </label>
            <input type="int" id="duracao" placeholder="Ex: 120" name="duracaoFilme">
        </div>

        <div>
            <label for="nota">Nota do filme: </label>
            <input type="float" id="nota" placeholder="Ex: 7.2" name="notaFilme">
        </div>
        
        <button type="submit">Enviar</button>

    </form>


<?php

require_once(__DIR__ . "/../include/footer.php");

?>