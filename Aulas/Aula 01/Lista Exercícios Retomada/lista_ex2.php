<?php


function desenhaLinha(array $mun){
    print "<tr>";
    print "<td>" . $mun ["nome"] . "</td>";
    print "<td>" . $mun ["habitantes"] . "</td>";
    print "<td>" . $mun["area"] . "km²" . "</td>";
    print "<td>" . $mun["altitude"] . "</td>";
    print "<td>" . $mun["estado"] . "</td>";
}

$municipio1 = array(
    "nome" => "Foz do Iguaçu",
    "habitantes" => "250.000",
    "area" => 500,
    "altitude" => 145,
    "estado" => "Paraná-PR"
);

$municipio2 = array(
    "nome" => "Cascavel",
    "habitantes" => "300.000",
    "area" => 420,
    "altitude" => 320,
    "estado" => "Paraná-PR"
);

$municipio3 = array(
    "nome" => "Chapecó",
    "habitantes" => "240.000",
    "area" => 120,
    "altitude" => 620,
    "estado" => "Santa Catarina-SC"
);



$municipios = array($municipio1, $municipio2, $municipio3);

print "<table border='1'>";

//Header
print "<tr>";
print "<th>Nome</th>";
print "<th>Habitantes</th>";
print "<th>Área</th>";
print "<th>Altitude</th>";
print "<th>Estado</th>";
print "<tr>";



foreach ($municipios as $m) {
    desenhaLinha($m)

}

print "</table>";



?>
