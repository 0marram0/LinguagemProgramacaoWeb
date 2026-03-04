<?php 

require_once('model/Presidente.php');

$dutra = new Presidente(16, "Eurico Gaspar Dutra", 1946, 1951);
$getulio = new Presidente(17, "Getúlio Vargas", 1951, 1954);
$cafe = new Presidente(18, "Café Filho", 1954, 1955);
$carlos = new Presidente(19, "Carlos Luz", 1955, 1955);
$nereu = new Presidente(20, "Nereu Ramos", 1955, 1956);
$jk = new Presidente(21, "Juscelino Kubitscheck", 1956, 1961);

$presidentes = array($dutra, $getulio, $cafe, $carlos, $nereu, $jk);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1">
        <tr>
            <th>Número</th>
            <th>Nome</th>
            <th>Ano Ínicio</th>
            <th>Ano Fim</th>
        </tr>

        <?php foreach ($presidentes as $p): ?>

            <tr>
                <td><?php echo $p->getNumero(); ?></td>
                <td><?php echo $p->getNome(); ?></td>
                <td><?php echo $p->getInicio(); ?></td>
                <td><?php echo $p->getFim(); ?></td>
            </tr>
        <?php endforeach ?>
        
    </table>
    
</body>
</html>