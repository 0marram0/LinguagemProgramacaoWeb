<?php 

$selecao = array(

    $jogador1 = array ("id" => 1,"numero" => 1, "nome" => "Taffarel"),
    $jogador2 = array ("id" => 2, "numero" => 2,"nome" => "Jorginho"),
    $jogador3 = array ("id" => 3, "numero" => 13, "nome" => "Aldair"),
    $jogador4 = array ("id" => 4, "numero" => 15, "nome" => "Márcio Santos"),
    $jogador5 = array ("id" => 5, "numero" => 6, "nome" => "Branco"),
    $jogador6 = array ("id" => 6, "numero" => 5, "nome" => "Mauro Silva"),
    $jogador7 = array ("id" => 7, "numero" => 8, "nome" => "Dunga"),
    $jogador8 = array ("id" => 8, "numero" => 17, "nome" => "Mazinho"),
    $jogador9 = array ("id" => 9, "numero" => 9, "nome" => "Zinho"),
    $jogador10 = array ("id" => 10, "numero" => 11, "nome" => "Romário"),
    $jogador11 = array ("id" => 11, "numero" => 7, "nome" => "Bebeto")

);



echo "<table border=1>";

    echo "<tr>";
        echo "<th>Número</th>";
        echo "<th>Nome</th>";
    echo "</tr>";

    fazerLinha($selecao);

echo "</table>";


function fazerLinha ($selecao) {
        
        foreach ($selecao as $s) {

            if ($s["id"] % 2 == 0) {
                $color = "Yellow";
            } else {
                $color = "Green";
            }

            echo "<tr style='background-color:$color'>";
                echo "<td>" . $s["numero"] . "</td>";
                echo "<td>" . $s["nome"] . "</td>";
            echo "</tr>";
        }
    }


?>
