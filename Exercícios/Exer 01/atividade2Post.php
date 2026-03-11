<?php

echo "Parâmetros recebidos por POST: ";  
echo "<br><br>";

$soma = 0;

$num_list = array(
    $numero1 = $_POST['num1'],
    $numero2 = $_POST['num2'],
    $numero3 = $_POST['num3']
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


