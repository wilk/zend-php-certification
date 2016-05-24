<?php
function generator() {
    yield 10;
    yield "key" => "value";
    yield;
}

$iterator = generator();

foreach ($iterator as $key => $value) {
    echo "$key -> $value".PHP_EOL;
}

// reference generator
function &referenceGenerator() {
    $value = 1;
    $index = 0;
    
    while ($index < 5) {
        yield $value;
        $index++;
        echo $value.PHP_EOL;
    }
}

$referenceIterator = referenceGenerator();

// used with &
foreach ($referenceIterator as &$value) {
    $value += $value;
}