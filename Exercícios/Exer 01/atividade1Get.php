<?php

echo "Parâmetros recebidos por GET: ";  
echo "<br>";

$numero1 = $_GET['num1'];
$numero2 = $_GET['num2'];
$soma = $numero1 + $numero2;

echo "Primeiro Numero: " . $numero1;
echo "<br>";
echo "Segundo Numero: " . $numero2;
echo "<br>";
echo "Soma: " . $soma;
