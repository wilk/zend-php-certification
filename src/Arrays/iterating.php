<?php
// looping

$currencies = ["dollar" => 10, "euro" => 20];
foreach ($currencies as $currency => $value) {
    echo "$currency: $value".PHP_EOL;
}

$nested = [
    ["dollar", "euro"],
    [10, 20],
    ["$", "€"]
];
// $first and $second are respectively
// dollar and euro
// 10 and 20
// $ and €
// one for each column
foreach ($nested as list($first, $second)) {
    echo "$first,$second".PHP_EOL;
}

// looping by cursor
/*
Function    Performs
reset       Moves the cursor to the beginning of the array
end         Moves the cursor to the end of the array
next        Advance the cursor
prev        Rewind the cursor
current     Returns the value of the element the cursor points at
key         Returns the key of the element the cursor points at
*/

$currencies = ["dollar" => 10, "euro" => 20];
while(list($key, $value) = each($currencies)) {
    echo "$key = $value".PHP_EOL;
}

// walking through arrays
$currencies = ["dollar" => 10, "euro" => 20];
array_walk($currencies, function (&$value, $key) {
    echo "$key = $value".PHP_EOL;
    $value += 10;
});

foreach ($currencies as $value => $key) {
    echo "$key = $value".PHP_EOL; 
}