<?php 

if (isset($_GET['num1']) && isset($_GET['num2']) && $_GET['num1'] != "" && $_GET['num2'] != ""){
    
    $numero1 = $_GET['num1'];
    $numero2 = $_GET['num2'];
    $soma = $numero1 + $numero2;
    $subtracao = $numero1 - $numero2;
    $multiplicacao = $numero1 * $numero2;
    $divisao = $numero1 / $numero2;

    echo "Primeiro Numero: " . $numero1;
    echo "<br>";
    echo "Segundo Numero: " . $numero2;
    echo "<br>";
    echo "Soma: " . $soma;
    echo "<br>";
    echo "Subtração: " . $subtracao;
    echo "<br>";
    echo "Multiplicação: " . $multiplicacao;
    echo "<br>";
    echo "Divisão: " . $divisao;
    
} else {
    echo "O programa precisa receber os parâmertros [num1] e [num2] como valores inteiros para mostrar as operações.";
}
