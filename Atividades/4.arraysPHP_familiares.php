<?php
echo "\033[2J\033[;H";
$dados = [
    "joao" => "João Alvin Odorizzi",
    "idadeJoao" => "18",
    "grauJoao" => "Filho",
    "silvio" => "Silvo Alvin Odorizzi",
    "idadeSilvio" => "61",
    "grauSilvio" => "Pai",
    "cida" => "Sidiane Beatriz Cristófoli",
    "idadeCida" => "49",
    "grauCida" => "Mãe",
];
echo "----------------------------------\n";
echo "Nome: " . $dados["joao"]."\n";
echo "Idade: " . $dados["idadeJoao"]."\n";
echo "Grau de Parentesco: : " . $dados["grauJoao"]."\n";
echo "----------------------------------\n";
echo "Nome: " . $dados["silvio"]."\n";
echo "Idade: " . $dados["idadeSilvio"]."\n";
echo "Grau de Parentesco: : " . $dados["grauSilvio"]."\n";
echo "----------------------------------\n";
echo "Nome: " . $dados["cida"]."\n";
echo "Idade: " . $dados["idadeCida"]."\n";
echo "Grau de Parentesco: : " . $dados["grauCida"]."\n";
echo "----------------------------------";

//PARA ADICIONAR USAMOS

/*<?php

$familiares = ['Alice', 'Bob', 'Charlie'];
$familiares[] = 'Davi';*/

