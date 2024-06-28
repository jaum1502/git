<?php
echo "\033[2J\033[;H";
$dados = [
    "nome" => "João Alvin Odorizzi",
    "saldo" => "R$1.450,00",
];

echo "Nome Completo: " . $dados["nome"] . "\n" . "Saldo total: " . $dados["saldo"];

