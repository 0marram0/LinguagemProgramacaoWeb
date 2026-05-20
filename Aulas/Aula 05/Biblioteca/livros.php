<?php

//Mostrar erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("util/Conexao.php");

//Conexão
$conexao = Conexao::getConexao();

//Declara aqui a mensagem de erro pra usar em todo código
$msgErro = "";

//Salvar o livro
if (isset($_POST['titulo'])) {

    //Receber os dados do formulário 
    $titulo = trim($_POST["titulo"]) ? trim($_POST["titulo"]) : null; //mesma coisa q um if, primeira parte é a condição, depois do ? é se a condição for verdadeira e depois do : é se a condição for falsa 
    $genero = trim($_POST["genero"]) ? trim($_POST["genero"]) : null;
    $paginas = is_numeric($_POST["paginas"]) ? ($_POST["paginas"]) : null; //is_numeric vai verificar se tem um número no campo, se tiver retorna verdadeiro se não tiver retorna falso
    $autor = trim($_POST["autor"]) ? trim($_POST["autor"]) : null;

    //Ver se o titulo já existe
    $sql = "SELECT titulo FROM livros WHERE titulo = ?";
    $stm = $conexao->prepare($sql);
    $stm->execute([$titulo]);
    $verificador = $stm->fetchAll();

    //Validar os dados
    $msgs = array();
    

    if (!$autor) {
        array_push($msgs, "Informe o nome do autor!");
    }

    if (!$titulo) {
        array_push($msgs, "Informe o título!");
    } else if (strlen($titulo) < 3 || strlen($titulo) > 50) {
        array_push($msgs, "O título deve ter entre 3 e 50 caracteres!");
    } else if ($verificador) {
        array_push($msgs, "Esse título já existe no seu banco.");
    }

    if (!$genero) {
        array_push($msgs, "Informe o gênero!");
    }

    if ($paginas == null) {
        array_push($msgs, "Informe a quantidade de páginas!");
    } else if ($paginas <= 0) {
        array_push($msgs, "A quantidade de páginas deve ser 1 ou mais!");
    }

    if (empty($msgs)) {
        //Inserir no banco
        $sql = "INSERT INTO livros (titulo, genero, qtd_paginas, autor) VALUES(?, ?, ?, ?)";
        $stm = $conexao->prepare($sql);
        $stm->execute(array($titulo, $genero, $paginas, $autor));

        //Redirecionar para a página de listagem
        header("location:livros.php");
    } else {
        //Mensagem de erro
        $msgErro = implode("<br>", $msgs);
    }

}

//Listagem dos livros
$sql = "SELECT * FROM livros";
$stm = $conexao->prepare($sql);
$stm->execute();
$livros = $stm->fetchAll();

//HTML
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
</head>

<body>

    <h1>Cadastro de livros</h1>

    <h3>Listagem</h3>

    <table border="1">
        <!--Cabeçalho-->
        <tr>
            <th>ID</th>
            <th>Autor</th>
            <th>Título</th>
            <th>Gênero</th>
            <th>Páginas</th>
            <th></th>
        </tr>

        <!--Dados-->
        <?php foreach ($livros as $l): ?>
            <tr>
                <td><?= $l["id"] ?></td>
                <td><?= $l["autor"] ?></td>
                <td><?= $l["titulo"] ?></td>
                <td>
                    <?php
                    if ($l['genero'] == 'D')
                        print "Drama";
                    else if ($l['genero'] == 'F')
                        print "Ficção";
                    else if ($l['genero'] == 'R')
                        print "Romance";
                    else if ($l['genero'] == 'O')
                        print "Outro";
                    ?>
                </td>
                <td><?= $l["qtd_paginas"] ?></td>
                <td><a href="livros_excluir.php?id=<?= $l["id"] ?>" onclick="if(! confirm('Confirme a exclusão do livro')) return false;">Excluir</a></td>
            </tr>

        <?php endforeach; ?>
    </table>


    <h3>Formulário</h3>

    <!-- <form action="" method="POST" onsubmit="return validarForm();")> -->
    <form action="" method="POST">

        <label for="">Autor</label>
        <input type="text" placeholder="Informe o Autor" name="autor" id="autor" value="<?php if(isset($autor)) echo $autor; ?>">
        <br><br>

        <label for="">Título</label>
        <input type="text" placeholder="Informe o título" name="titulo" id="titulo" value="<?php if(isset($titulo)) echo $titulo; ?>">
        <br><br>

        <select name="genero" id="genero">
            <option value="">---Selecione o gênero---</option>
            <option value="D" <?= (isset($genero)) && $genero == "D" ? "selected" : "" ?> >Drama</option>
            <option value="F" <?= (isset($genero)) && $genero == "F" ? "selected" : "" ?> >Ficção</option>
            <option value="R" <?= (isset($genero)) && $genero == "R" ? "selected" : "" ?> >Romance</option>
            <option value="O" <?= (isset($genero)) && $genero == "O" ? "selected" : "" ?> >Outro</option>

        </select>

        <br><br>

        <label for="">Quantidade de Páginas</label>
        <input type="number" name="paginas" placeholder="Informe o número de páginas" id="qtdPaginas" value="<?php if(isset($paginas)) echo $paginas; ?>">
        <br><br>

        <button>Gravar</button>

    </form>

    <div style="color: red;" id="erro">
        <br>
        <?= $msgErro ?>
    </div>

    <script src="validacao.js"></script>
</body>

</html>