<?php
// SPL stands for Standard PHP Library

$fruits = ["dollar" => 10, "sterlin" => 5, "euro" => 25];
$obj = new ArrayObject($fruits);

foreach ($obj as $key => $value) echo "$key ... $value".PHP_EOL;

$obj->asort();

foreach ($obj as $key => $value) echo "$key ... $value".PHP_EOL;

$obj->ksort();

foreach ($obj as $key => $value) echo "$key ... $value".PHP_EOL;

/*
Flag Effect

ArrayObject::STD_PROP_LIST  Properties of the object have their normal functionality when accessed as list (var_dump, foreach, etc.).
ArrayObject::ARRAY_AS_PROPS Entries can be accessed as properties (read and write).
*/

var_dump($obj->dollar);
$obj->setFlags(ArrayObject::ARRAY_AS_PROPS);
var_dump($obj->dollar);

foreach ($obj as $key => $value) {
    echo "$key => $value".PHP_EOL;
}