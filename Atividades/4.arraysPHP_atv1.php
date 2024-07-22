<?php


function limparTela()
{
    echo "\033[2J\033[;H";
}

echo "Plano 1: Filmes de 2019 para baixo\n";
echo "Plano 2: Filmes de 2021 para baixo\n";
echo "Plano 3: Todos os filmes!!!\n\n";
do {
    echo "Digite seu tipo de plano: ";
    $tipoPlano = (int) fgets(STDIN);
    limparTela();
} while ($tipoPlano != 1 && $tipoPlano != 2 && $tipoPlano != 3);
echo "Digite o ano de lançamento do filme: ";
$anoLancamento = (int) fgets(STDIN);

if ($tipoPlano == 3) {
    echo "Esse filme está incluido no seu plano\n\n\n\n\n";
} elseif ($anoLancamento <= 2021 && $tipoPlano == 2) {
    echo "Esse filme está incluido no seu plano\n\n\n\n\n";
} elseif ($anoLancamento <= 2019 && ($tipoPlano == 2 || $tipoPlano == 1 || $tipoPlano == 3)) {
    echo "Esse filme está incluido no seu plano\n\n\n\n\n";
} else {
    echo "Esse filme é de $anoLancamento e não está disponível em seu plano.";
}

