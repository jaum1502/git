<?php

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
