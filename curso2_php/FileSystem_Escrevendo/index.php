<?php

$arquivo = fopen('teste.txt','a');
$frase = "teste";
fwrite($arquivo, $frase);
fclose($arquivo);

//  ABRE O ARQUIVO E LE, E IMPRIME ELES
