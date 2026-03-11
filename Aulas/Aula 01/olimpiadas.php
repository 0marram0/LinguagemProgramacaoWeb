<?php

function desenhaLinha(array $pais){
    print "<tr>";
    print "<th>" . $pais ["ordem"] . "</th>";
    print "<th>" . $pais ["nome"] . "</th>"; 
    print "<th>" . $pais["ouro"] . "</th>"; 
    print "<th>" . $pais["prata"] . "</th>";  
    print "<th>" . $pais["bronze"] . "</th>"; 
    print "<th>" . $pais["medalhas"] . "</th>";
}


$pais1 = array(
    "ordem" => "1",
    "nome" => "🇺🇸 Estados Unidos",
    "ouro" => "46",
    "prata" => "37",
    "bronze" => "38",
    "medalhas" => "121"
);

$pais2 = array(
    "ordem" => "2",
    "nome" => "🏴󠁧󠁢󠁥󠁮󠁧󠁿 Grã-Bretanha",
    "ouro" => "27",
    "prata" => "23",
    "bronze" => "17",
    "medalhas" => "67"
);

$pais3 = array(
    "ordem" => "3",
    "nome" => "🇨🇳 China",
    "ouro" => "26",
    "prata" => "18",
    "bronze" => "26",
    "medalhas" => "70"
);

$pais4 = array(
    "ordem" => "4",
    "nome" => "🇷🇺 Russia",
    "ouro" => "19",
    "prata" => "17",
    "bronze" => "20",
    "medalhas" => "56"
);

$pais5 = array(
    "ordem" => "5",
    "nome" => "🇩🇪 Alemanha",
    "ouro" => "17",
    "prata" => "10",
    "bronze" => "15",
    "medalhas" => "42"
);


$paises = array($pais1, $pais2, $pais3, $pais4, $pais5);

print "<table border='1'>";

//Header
print "<tr>";
print "<th>Ordem</th>";
print "<th>Nome</th>";
print "<th>🏅</th>";
print "<th>🥈</th>";
print "<th>🥉</th>";
print "<th>🏅🥈🥉</th>";
print "<tr>";





foreach ($paises as $pais) {
    desenhaLinha($pais);

}

print "</table>";


?>
