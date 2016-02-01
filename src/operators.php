<?php

// arithmetic
$sum = 20 + 10;
$subtract = $sum - 10;
$multiplying = $sum * $subtract;
$dividing = $multiplying / $sum;
$mod = $sum % 2;

print_r("$sum, $subtract, $multiplying, $dividing, $mod \n");

// bitwise
$and = 10 & 100;
$or = 1 | 0;
$eor = 1 ^ 10;
$shift = 5 >> 2;
$negate = ~0101;

print_r("$and, $or, $eor, $shift, $negate \n");

if (true and false) print_r("something wrong\n");
elseif (true or false) print_r("that's ok\n");

$bool = isset($and);
if ($bool) print_r("is set\n");
else print_r("actually no\n");