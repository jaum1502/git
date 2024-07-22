<?php
echo "\033[2J\033[;H";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . "\n";
    }
}
