<?php

echo("test\n");

$i = 0;
$f = 0.0;
$s = "";
$a = [];
$o = null;
$b = false;
$u;

echo(empty($i).", ".empty($f).", ".empty($s).", ".empty($a).", ".empty($o).", ".empty($b).", ".empty($u)."\n");

$code = "echo(\"that's a test\n\");";
eval($code);

$list = ['car', 'yellow', 12000.5];
list($product, $color, $value) = $list;
echo("$product $color $value\n");

// constants and magic constants
const PI = 3.14;
echo(PI . "\n");
echo(__FILE__ . " " . __DIR__ . "\n");
function test() {
    echo(__FUNCTION__ . "\n");
}
test();