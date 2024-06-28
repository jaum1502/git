<?php
echo "\033[2J\033[;H";
$nota = 0;
for ($i = 1; $i < $argc; $i++) {
    $nota += $argv[$i];
}
$media = $nota / ($argc - 1);
if ($media < 6) {
    echo "REPROVADO";
} else {
    echo "APROVADO";
}

//---------------------- DA PRA FAZER ASSIM TAMBEM ----------------------------

$notas = [10, 5.5, 3.8, 7.5, 6, 6.1, 5.9];

foreach ($notas as $nota) {
    $resultado = $nota > 6 ? "aprovado" : "reprovado";

    echo "Esse(a) aluno(a) foi $resultado com a nota $nota \n";
}