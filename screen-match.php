<?php

function exibeMensagemLancamento(int $ano): void
{
    if ($ano > 2022) {
        echo "Esse filme é um lançamento";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "esse filme não é um lançamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool
{
    return $planoPrime || $anoLancamento < 2020;
}


echo "Bem vindo(a) ao screen match!!!\n";

$nomeFilme = "Top gun\n";

$anoLancamento = 2022;

$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}


$notaFilme = array_sum($notas) / ($argc - 1); //esse -1 é para subtrair o primeiro indice(o nome do arquivo)

$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "\033[2J\033[;H";


echo "Nome do filme: " . $nomeFilme . "";
echo "Nota do filme: " . $notaFilme . "\n";
echo "Ano de lançamento: " . $anoLancamento . "\n";

exibeMensagemLancamento($anoLancamento);


$genero = match ($nomeFilme) {
    "Top Gun" => "ação",
    "Thor: Ragnarok" => "herói",
    "Se beber não case" => "comédia",
    default => "genero desconhecido"
};

echo "O gênero é: $genero\n";

