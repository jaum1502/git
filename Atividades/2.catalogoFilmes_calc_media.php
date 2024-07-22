<?php
echo "\033[2J\033[;H";
echo "Calculadora:\n";
$nota = $argv[1];
$nota += $argv[2];
$nota += $argv[3];
$media = $nota / 3;
echo $media;


