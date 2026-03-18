<?php 

require_once "model/Pessoa.php";

$tipo = "";

if (isset($_GET['tipo']))
    $tipo = $_GET['tipo'];

if ($tipo == 'A'){
    //Array
    if (isset($_GET['nome']) && isset($_GET['sobrenome']) && isset($_GET['idade']) && $_GET['nome'] != "" && $_GET['sobrenome'] != "" && $_GET['idade'] != ""){
        
        $pessoaArray['nome'] = $_GET['nome'];
        $pessoaArray['sobrenome'] = $_GET['sobrenome'];
        $pessoaArray['idade'] = $_GET['idade'];

        echo "Nome Completo = " . $pessoaArray['nome'] . " " . $pessoaArray["sobrenome"];
        echo "<br>";
        echo "Idade = " . $pessoaArray['idade'];

    } else {
        echo "Defina os atributos de nome, sobrenome e idade.";
    }

} else if ($tipo == 'C') {
    //Classe
    if (isset($_GET['nome']) && isset($_GET['sobrenome']) && isset($_GET['idade']) && $_GET['nome'] != "" && $_GET['sobrenome'] != "" && $_GET['idade'] != ""){
        
        $pessoa = new Pessoa;
        $pessoa -> setNome($_GET['nome']);
        $pessoa -> setSobrenome($_GET['sobrenome']);
        $pessoa -> setIdade($_GET['idade']);

        echo "Nome Completo = " . $pessoa -> getNome() . " " . $pessoa -> getSobrenome();
        echo "<br>";
        echo "Idade = " . $pessoa -> getIdade();

    } else {
        echo "Defina os atributos de nome, sobrenome e idade.";
    }
} else {
    echo "Parâmeto [tipo] com valor inválido!";
}

