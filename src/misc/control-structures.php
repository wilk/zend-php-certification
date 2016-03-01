<?php

// loops
$a = 0;
while ($a < 10) {
    print_r("$a\n");
    $a++;
}

do {
    print_r("$a\n");
    $a--;
} while ($a > 0);

for ($i = 0; $i < 10; $i++) {
    print_r("$i\n");
}

$a = [10, 20, 30];
foreach ($a as $el) {
    print_r("$el\n");
}

