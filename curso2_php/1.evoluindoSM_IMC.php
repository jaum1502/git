<?php

echo "\033[2J\033[;H";

function calculaImc(float $alturaEmMetros, float $pesoEmQuilos): float
{
    $altura = 1.73;
    $peso = 65;

    return $peso / $altura ** 2;
}