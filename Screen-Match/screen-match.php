<?php
require __DIR__ . "/funcoes.php";

echo "Bem vindo(a) ao screen match!!!\n";

$nomeFilme = "Top Gun";
$anoLancamento = 2022;

$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}


$notaFilme = array_sum($notas) / ($argc - 1); //esse -1 é para subtrair o primeiro indice(o nome do arquivo)

$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);


$filme = [
"nome"=>"Thor: Ragnarok",
"ano"=>2021,
"nota"=>"7.8",
"Thor: Ragnarok" => "Super Herói",
];



exibeMensagemLancamento($anoLancamento);


$genero = match ($nomeFilme) {
    "Top Gun" => "Ação",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__. '/filme.json', $filmeComoStringJson);



echo "\033[2J\033[;H";
echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: " . $notaFilme . "\n";
echo "Ano de lançamento: " . $anoLancamento . "\n";
echo "Gênero: $genero \n";

