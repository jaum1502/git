<?php

echo "Bem vindo(a) ao screen match!!!\n";

$nomeFilme = "Top gun\n";

$anoLancamento = 2022;

$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}


$notaFilme = $somaDenotas / ($argc - 1); //esse -1 é para subtrair o primeiro indice(o nome do arquivo)

$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "\033[2J\033[;H";


echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: " . $notaFilme . "\n";
echo "Ano de lançamento: " . $anoLancamento . "\n";
if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento";
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo\n";
} else {
    echo "esse filme não é um lançamento\n";
}

$genero = match ($nomeFilme) {
    "Top Gun" => "ação",
    "Thor: Ragnarok" => "herói",
    "Se beber não case" => "comédia",
    default => "genero desconhecido"
};

echo "O gênero é: $genero\n";
var_dump($notas);

