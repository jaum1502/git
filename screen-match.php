<?php

echo "Bem vindo(a) ao screen match!!!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = $argv[1] ?? 2022;
$notaFilme = 0.8;
$somaDenotas = 9;
$somaDenotas += 6;
$somaDenotas += 8;
$somaDenotas += 7.5;
$somaDenotas += 5;
$notafilme = $somaDenotas / 5;
$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento<2020;


echo "Nome do filme: " . $nomeFilme . "\n";
echo "Data de lançamento: " . $anoLancamento . "\n";