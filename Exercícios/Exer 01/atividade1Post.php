<?php

echo "Parâmetros recebidos por POST: ";  
echo "<br>";

$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];
$soma = $numero1 + $numero2;

echo "Primeiro Numero: " . $numero1;
echo "<br>";
echo "Segundo Numero: " . $numero2;
echo "<br>";
echo "Soma: " . $soma;
