<?php
$first = [1,2,3];
$second = ["1", "2", "3"];

var_dump($first == $second); // true
var_dump($first === $second); // false

$first = [2, 1, 3];
$second = [1, 2, 3];

var_dump($first == $second); // false
var_dump($first === $second); // false

$first = [0 => 1, 1 => 2, 2 => 3];
$second = [1 => 2, 0 => 1, 2 => 3];

var_dump($first == $second); // true
var_dump($first === $second); // false (keys are not in the same order)

$first = [1,2,3];
$second = [1,2,3];

var_dump($first == $second); // true
var_dump($first === $second); // true

$first = ["a" => "b", "c" => "d", "e" => "f"];
$second = ["a" => "b", "c" => "d", "e" => "f"];

var_dump($first == $second); // true
var_dump($first === $second); // true

$first = ["a" => "b", "c" => "d", "e" => "f"];
$second = ["c" => "d", "a" => "b", "e" => "f"];

var_dump($first == $second); // true
var_dump($first === $second); // false (also here the keys are not in the same order)

$first = [10, "first", "key" => "value"];
$second = [10, "first", "key" => "value"];

var_dump($first == $second); // true
var_dump($first === $second); // true

$first = [10, "first", "multi" => [10, 20, 30, "multi" => [10, 20]]];
$second = [10, "first", "multi" => [10, 20, 30, "multi" => [10, 20]]];

var_dump($first == $second); // true
var_dump($first === $second); // true

// the arrays are compared recursively
$first = [10, "first", "multi" => [10, 20, 30, "multi" => [10, 20]]];
$second = [10, "first", "multi" => [10, 20, 30, "multi" => [10, 30]]];

var_dump($first == $second); // false
var_dump($first === $second); // false

// diff
$first = [10, 20, 30, "multi" => [10, 30], "key" => "value"];
$second = [40, "multi" => [10, 30], "key" => "value"];
$third = ["multi" => [10, 30], "keyz" => "value"];

// array_diff generates a new array made of the values that are present in $first
// but not in the others arrays
var_dump(array_diff($first, $second, $third)); // [10, 20, 30]

$first = ["dollar" => "$", "euro" => "€", "yen" => "¥"];
$second = ["dollar" => "$", "euro" => "EUR"];
$third = ["dollar" => "$", "euro" => "€", "sterline" => "£"];

var_dump(array_diff_assoc($first, $second, $third)); // ["yen" => "¥"]

// array_diff and array_diff_assoc differs because the first one checks only the values
// while the second one checks also the keys

// intersect
// array_intersect is the inverse of array_diff as well as array_intersect_assoc for array_diff_assoc
$first = [10, 20, 30, "multi" => [10, 30], "key" => "value"];
$second = [40, "multi" => [10, 30], "key" => "value"];
$third = ["multi" => [10, 30], "keyz" => "value"];

// array_intersect generates a new array made of the values that are present in $first
// and in the others arrays
var_dump(array_intersect($first, $second, $third)); // ["multi" => [10, 30], "key" => "value"]

$first = ["dollar" => "$", "euro" => "€", "yen" => "¥"];
$second = ["dollar" => "$", "euro" => "EUR"];
$third = ["dolar" => "$", "euro" => "€", "sterline" => "£"];

// an empty array is generated because no keys and values are matched
var_dump(array_intersect_assoc($first, $second, $third)); // []

// user defined comparison
// array_udiff takes a list of arrays and a function as last parameter
// the function needs to return 1 if the first element is greater than the second
// -1 if it's lower, 0 otherwise (equal)
// the result will be the difference between them (those elements that are in $first but not in $second)
$first = [10, 20, 30];
$second = [30, 20, 30];
$result = array_udiff($first, $second, function ($a, $b) {
    if ($a < $b) return -1;
    elseif ($a > $b) return 1;
    else return 0;
});
var_dump($result); // [10]

// array_uintersect takes a list of arrays and a function as last parameter
// the function needs to return 1 if the first element is greater than the second
// -1 if it's lower, 0 otherwise (equal)
// the result will be the intersection between them (those elements that are in $first and in $second)
$first = [10, 20, 30];
$second = [30, 20, 30];
$result = array_uintersect($first, $second, function ($a, $b) {
    if ($a < $b) return -1;
    elseif ($a > $b) return 1;
    else return 0;
});
var_dump($result); // [20, 30]