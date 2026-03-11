<?php

$par = 0;
$impar = 0;

for ($num = 20; $num < 71; $num++) {
    if ($num % 2 == 0) {
        $par = $par + $num;
    } else {
        $impar = $impar + $num;
    }
}

print "Essa é a soma dos números pares: " . $par . "\n";

print "Essa é a soma dos números ímpares: " .$impar . "\n";

?>
