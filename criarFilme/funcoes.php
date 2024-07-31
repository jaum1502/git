<?PHP

function criaFilme()
{
    echo "Digite o nome do filme: ";
    $nome = fgets(STDIN);
    echo "Digite a nota do filme: ";
    $nota = fgets(STDIN);
    echo "Digite a categoria do filme: ";
    $categoria = fgets(STDIN);



}


function limparTela()
{
    echo "\033[2J\033[;H";
}

return [
    'nome' => $nome,
    'nota' => $nota,
    'categoria' => $categoria,
];