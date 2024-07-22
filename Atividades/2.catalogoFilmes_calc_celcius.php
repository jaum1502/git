<?php
echo "\033[2J\033[;H";
$tempFaren = ($argv[1] * 9 / 5) + 32;


if ($tempFaren > 10) {
    echo $tempFaren . "";
}echo "\033[2J\033[;H";