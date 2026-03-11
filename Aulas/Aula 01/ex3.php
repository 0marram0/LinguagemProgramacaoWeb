<?php

$retangulo1 = array("base" => 10,
                    "altura" => 20);
                    
$retangulo2 = array("base" => 30,
                    "altura" => 40);

$retangulo3 = array("base" => 50,
                    "altura" => 60);
                    

$retangulos = array($retangulo1 , $retangulo2 , $retangulo3);

foreach ($retangulos as $r) {
   $area = $r["base"] * $r["altura"] . "<br>";
   print "Essa é a área do retângulo: " . $area;
}


?>
