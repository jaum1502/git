<?php
echo "\033[2J\033[;H";
echo "Digite o nome do filme: \n";
$filme = $argv[1];
$nomeFilme = strpos($filme,':');
echo substr($filme,0,$nomeFilme );