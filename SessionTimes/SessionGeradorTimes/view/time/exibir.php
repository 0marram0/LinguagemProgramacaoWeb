<?php

require_once(__DIR__ . "/../../model/Time.php");

$linhasFormacao = [
    "343"   => [["PE", "ATA", "PD"], ["MEI"], ["MC", "MC"], ["VOL"], ["ZAG", "ZAG", "ZAG"], ["GOL"]],
    "3412"  => [["ATA", "ATA"], ["MEI"], ["MC", "MC"], [ "VOL", "VOL"], ["ZAG", "ZAG", "ZAG"], ["GOL"]],
    "352"   => [["ATA", "ATA"], ["PE", "MEI", "PD"], ["VOL", "VOL"], ["ZAG", "ZAG", "ZAG"], ["GOL"]],
    "41212" => [["ATA", "ATA"], ["MEI"], ["MC", "MC"], ["VOL"], ["LE", "ZAG", "ZAG", "LD"], ["GOL"]],
    "4231"  => [["ATA"], ["PE", "MEI", "PD"], ["VOL", "VOL"], ["LE", "ZAG", "ZAG", "LD"], ["GOL"]],
    "4312"  => [["ATA", "ATA"], ["MEI"], ["MC", "MC", "MC"], ["LE", "ZAG", "ZAG", "LD"], ["GOL"]],
    "433"   => [["PE", "ATA", "PD"], ["MEI"], ["MC", "VOL"], ["LE", "ZAG", "ZAG", "LD"], ["GOL"]],
    "442"   => [["ATA", "ATA"], ["MC", "VOL", "VOL", "MC"], ["LE", "ZAG", "ZAG", "LD"], ["GOL"]],
    "451"   => [["ATA"], ["PE", "MC", "VOL", "MC", "PD"], ["LE", "ZAG", "ZAG", "LD"], ["GOL"]],
    "532"   => [["ATA", "ATA"], ["MC", "MC", "MC"], ["LE", "ZAG", "ZAG", "ZAG", "LD"], ["GOL"]],
];

$time = $_SESSION["time"] ?? null;
$linhas = [];

if ($time instanceof Time && isset($linhasFormacao[(string) $time->getFormacao()])) {
    $disponiveis = $time->getJogadores() ?? [];

    foreach ($linhasFormacao[(string) $time->getFormacao()] as $posicoes) {
        $linha = [];

        foreach ($posicoes as $posicao) {
            if (! empty($disponiveis[$posicao])) {
                $linha[] = ["posicao" => $posicao, "nome" => array_shift($disponiveis[$posicao])["nome"]];
            }
        }

        if ($linha) {
            $linhas[] = $linha;
        }
    }
}

?>

<div class="col-6">
    <section class="escalacao">

        <?php if ($linhas): ?>
            <header class="escalacao-topo">
                <h2><?= htmlspecialchars($time->getNome()) ?></h2>
                <span class="formacao"><?= implode("-", str_split((string) $time->getFormacao())) ?></span>
            </header>

            <div class="campo">
                <?php foreach ($linhas as $linha): ?>
                    <div class="linha">
                        <?php foreach ($linha as $jogador): ?>
                            <div class="jogador pos-<?= $jogador["posicao"] ?>">
                                <span class="camisa"><?= $jogador["posicao"] ?></span>
                                <span class="nome-jogador" title="<?= htmlspecialchars($jogador["nome"]) ?>">
                                    <?= htmlspecialchars($jogador["nome"]) ?>
                                </span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="campo campo-vazio">
                <p>Informe o nome e a formação para gerar a escalação.</p>
            </div>
        <?php endif; ?>

    </section>
</div>