<?php

require __DIR__ . ("/funcoes.php");
limparTela();
echo "Deseja criar um filme? ";
$opc = strtoupper(trim(fgets(STDIN)));
if ($opc == "S") {
    limparTela();
    criaFilme();
    limparTela();
    echo "Nome do filme: \n $nome";
    echo "Nota do filme: \n $nota";
    echo "Categoria do filme: \n $categoria";

} else {
    echo "Encerrando...";
}



