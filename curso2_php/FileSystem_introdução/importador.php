<?php

$importador = file_get_contents(__DIR__.'/index.json');
$filme = json_decode($importador, true);
var_dump($filme);