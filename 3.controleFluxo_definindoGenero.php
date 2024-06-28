<?php
echo "\033[2J\033[;H";
$filme = "diário de um banana";
$filme = "o chamado";
$filme = "como treinar o seu dragão";

$genero = match ($filme) {
    "diário de um banana" => "comédia",
    "o chamado" => "terror",
    "como treinar o seu dragão" => "ação"
};

echo "Nome do filme: $filme\n";
echo "Categoria: $genero";
