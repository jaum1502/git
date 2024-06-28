<?php
echo "\033[2J\033[;H";
$anoLancamento = $argv[1];
if ($anoLancamento >= 2020) {
    echo "Esse filme ----> É <---- lançamento";
} else {
    echo "Esse filme ----> NÃO É <---- lançamento";
}