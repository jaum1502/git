<?php

$nota = 0;
for ($i = 1; $i < $argc; $i++) {
    $nota += $argv[$i];
}
$media = $nota / ($argc - 1);
echo $media;