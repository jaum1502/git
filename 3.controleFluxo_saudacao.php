<?php

$hora = $argv[1];
if ($hora > 23 || $hora < 0) {
    echo "horário inválido";
} elseif ($hora < 12) {
    echo "bom dia";
} elseif ($hora < 18) {
    echo "boa tarde";
} elseif ($hora < 24) {
    echo "boa noite";
}