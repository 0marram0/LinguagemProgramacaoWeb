<?php

function media_aritmetica($num1 , $num2 , $num3){
    $media = ($num1 + $num2 + $num3) / 3;
    
    return $media . "<br>";
}


print "Média 1: " . media_aritmetica(10 , 15 , 20) . "<br>";
print "Média 2: " . media_aritmetica(30 , 50 , 40) . "<br>";
print "Média 3: " . media_aritmetica(60 , 80 , 70) . "<br>";



?>
