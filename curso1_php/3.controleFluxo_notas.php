<?php
echo "\033[2J\033[;H";
$nota = 0;
for ($i = 1; $i < $argc; $i++) {
    $nota += $argv[$i];
}
$media = $nota / ($argc - 1);
echo $media;