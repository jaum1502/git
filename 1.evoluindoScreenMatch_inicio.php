<?php
$anoLancamento = $argv[1];
function testeLancamentos(int $anoLancamento):void
{
    if ($anoLancamento > 2022) {
        echo "Esse filme é um lançamento";
    } elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "esse filme não é um lançamento\n";
    }
}

testeLancamentos(2022);



