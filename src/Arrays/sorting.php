<?php
// sorting functions: those starting with a means "associative" while r means "reverse"
/*
Function    Used for
sort        Sorting arrays alphabetically
rsort       Reverse alphabetical sort
asort       Associative sort
arsort      Reversed associative sort
ksort       Key sort
krsort      Reverse key sort
usort       User defined comparison function for sorting
shuffle     Pseudo-random sort
*/

// these functions take a third parameters (expect usort) as a sort flag
/*
Flag                Meaning
SORT_REGULAR        Compare items normally – don’t change types
SORT_NUMERIC        Cast items to numeric values and then compare
SORT_STRING         Cast items to strings and then compare
SORT_LOCALE_STRING  Use locale settings to cast items to strings
SORT NATURAL        Use natural order sorting, like the function natsort()
SORT_FLAG_CASE      Can be combined with SORT_STRING and SORT_NATURAL to sort strings case-insensitively
*/

$arr = [30, 20, 10];
foreach ($arr as $item) echo $item.PHP_EOL;
sort($arr);
foreach ($arr as $item) echo $item.PHP_EOL;
rsort($arr);
foreach ($arr as $item) echo $item.PHP_EOL;

$arr = ["dollar" => 10, "sterlin" => 20, "euro" => 5];
foreach ($arr as $key => $value) echo "$key: $value".PHP_EOL;
asort($arr);
foreach ($arr as $key => $value) echo "$key: $value".PHP_EOL;
arsort($arr);
foreach ($arr as $key => $value) echo "$key: $value".PHP_EOL;
ksort($arr);
foreach ($arr as $key => $value) echo "$key: $value".PHP_EOL;
krsort($arr);
foreach ($arr as $key => $value) echo "$key: $value".PHP_EOL;

$arr = [10, 20, 30];
foreach ($arr as $item) echo $item.PHP_EOL;
shuffle($arr);
foreach ($arr as $item) echo $item.PHP_EOL;
shuffle($arr);
foreach ($arr as $item) echo $item.PHP_EOL;
shuffle($arr);
foreach ($arr as $item) echo $item.PHP_EOL;
shuffle($arr);
foreach ($arr as $item) echo $item.PHP_EOL;

// natural sorting
$arr = ["arr0", "arr1", "arr10", "arr11", "arr2", "arr20", "arr22", "arr33"];
foreach ($arr as $item) echo $item.PHP_EOL;
shuffle($arr);
foreach ($arr as $item) echo $item.PHP_EOL;
natsort($arr);
foreach ($arr as $item) echo $item.PHP_EOL;