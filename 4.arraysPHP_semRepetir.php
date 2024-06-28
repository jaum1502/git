<?php
echo "\033[2J\033[;H";
$array = [1, 2, 2, 3, 4, 4, 5];
$semDuplicatas = array_unique($array);
for ($i = 0; $i < count($semDuplicatas);$i++){
if($semDuplicatas!=null){
echo $semDuplicatas[$i];
}}