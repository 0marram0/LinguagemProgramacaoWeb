<?php
$cores = [1 => "yellow",
          2 => "blue",
          3 => "black",
          4 => "green",
          5 => "red",
          6 => "purple",
          7 => "grey",
          8 => "brown"];
          
for ($i=1; $i <=8 ; $i++) { 
    print "<div style='background-color: $cores[$i]; width: 100px; height: 100px;'></div>";
}
?>
