<?php

echo "Parâmetros recebidos por GET: ";  
echo "<br><br>";

$soma = 0;

$num_list = array(
    $numero1 = $_GET['num1'],
    $numero2 = $_GET['num2'],
    $numero3 = $_GET['num3']
);

foreach ($num_list as $n) {
    $soma += $n;
}

$media = $soma / count($num_list);

$i = 0;

foreach ($num_list as $n) {
    $i++;
    echo "Numero " . $i . ": " . $n; 
    echo "<br>";
}

echo "Média: " . $media;


