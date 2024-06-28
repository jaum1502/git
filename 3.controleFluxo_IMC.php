<?php
echo "\033[2J\033[;H";
$peso = $argv[1];
$altura = $argv[2];

$imc = $peso / ($altura * $altura);
$condicao = null;
if ($imc < 18.5) {
    $condicao = "Abaixo do peso normal";
} elseif ($imc <= 24.9) {
    $condicao = "Peso normal";
} elseif ($imc <= 29.9) {
    $condicao = "Excesso de peso";
} elseif ($imc <= 34.9) {
    $condicao = "Obesidade classe 1";
} elseif ($imc <= 39.9) {
    $condicao = "Obesidade classe 2";
} elseif ($imc >= 40) {
    $condicao = "Obesidade classe 3";
}





echo "Seu IMC é de $imc\n";
echo $condicao;