<?php

$filme = [
    "nome"=>"Thor: Ragnarok",
    "ano"=>(int)2021,
    "nota"=>(float)7.8,
    "Thor: Ragnarok" => "Super Herói",
    ];

   file_put_contents(__DIR__.'/index.json', json_encode($filme));