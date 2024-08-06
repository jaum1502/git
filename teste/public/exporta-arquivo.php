<?php

$infos = [
'nome'=> $_POST['nome'],
'idade'=> $_POST  ['idade'],
'cidade'=> $_POST ['cidade']
];

file_put_contents('sobre.json', json_encode($infos));

header('location:/sucesso.php');
