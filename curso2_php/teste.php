<?php
function ordenarStrings(array $array): array
{
    sort($array);
    return $array;
}

$array = array("banana", "abacaxi", "laranja", "uva");
$arrayOrdenado = ordenarStrings($array);
echo "Array ordenado: \n";
print_r($arrayOrdenado);