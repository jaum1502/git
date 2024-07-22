<?php

function operacaoMatematica(int $numero1, int $numero2, string $operacao): float
{
    return match($operacao) {
        'soma' => $numero1 + $numero2,
        'subtração' => $numero1 - $numero2,
        'divisão' => $numero1 / $numero2, 
        'multiplicação' => $numero1 * $numero2,
    };
}