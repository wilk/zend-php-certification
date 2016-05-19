<?php
// range generates a new array, from 10 to 20 with a step of 2 (10, 12, 14, ..., 20)
$keys = range(10, 20, 2);
var_dump($keys);
$values = range(10, 15);
var_dump($values);
// array_combine combines two arrays in a new associative one
// so the first array will be the keys and the second the values
// the length of the arrays must be the same
$arr = array_combine($keys, $values);
var_dump($arr);

// array_fill generates a new array starting from index 3, adding 3 new "developers"
$values = array_fill(3, 3, "developers");
var_dump($values);
// array_fill_keys generates a new array with doo, foo and bar keys with value of 20
$keys = array_fill_keys(["doo", "foo", "bar"], 20);
var_dump($keys);

// adding and removing elements
/*
Function            Effect
array_shift()       Shift an element off the beginning of array
array_unshift()     Prepend one or more elements to the beginning of an array
array_pop()         Pop the element off the end of array
array_push()        Push one or more elements onto the end of array
*/

$fruits = ["orange", "raspberry", "cherry", "banana"];
var_dump($fruits);
$orange = array_shift($fruits);
echo $orange.PHP_EOL;
var_dump($fruits);

$fruits = ["orange", "raspberry", "cherry", "banana"];
var_dump($fruits);
$index = array_unshift($fruits, "apple");
echo $index.PHP_EOL;
var_dump($fruits);

$fruits = ["orange", "raspberry", "cherry", "banana"];
var_dump($fruits);
$banana = array_pop($fruits);
echo $banana.PHP_EOL;
var_dump($fruits);

$fruits = ["orange", "raspberry", "cherry", "banana"];
var_dump($fruits);
$index = array_push($fruits, "apple");
echo $index.PHP_EOL;
var_dump($fruits);

// keys are left untouched while indexes are reduced
$mixedFruits = ["orange", "assoc" => "raspberry", "cherry", "banana"];
var_dump($mixedFruits);
$orange = array_shift($mixedFruits);
var_dump($mixedFruits);