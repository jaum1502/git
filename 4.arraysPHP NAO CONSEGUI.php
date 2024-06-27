<?php
for ($i = 0; $i < ($argc-1); $i++) {
    $valor = [];
    $valor[$i] = $argv[$i+1];
    if ($valor == $argv[$i+1]){
        $valor[$i]=null;
        $i--;
    }else{
        echo $valor[$i];
    }
}
