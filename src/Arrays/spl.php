<?php
// SPL stands for Standard PHP Library

$fruits = ["dollar" => 10, "sterlin" => 5, "euro" => 25];
$obj = new ArrayObject($fruits);

foreach ($obj as $key => $value) echo "$key ... $value".PHP_EOL;

$obj->asort();

foreach ($obj as $key => $value) echo "$key ... $value".PHP_EOL;

$obj->sort();

foreach ($obj as $key => $value) echo "$key ... $value".PHP_EOL;