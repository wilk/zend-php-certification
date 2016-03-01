<?php
$people = ['foo', 'bar', 'goo'];
$hashMap = ['key' => 'value', 'val' => 10, 3 => 'lol'];

print_r($people);
print_r($hashMap);

// filling arrays with range
$range = range(10, 20);
print_r($range);

// slicing arrays
$full = [10, 20, 30, 40, 50];
$part = array_slice($full, 3);
$part2 = array_slice($full, 3, 1);
$part3 = array_slice($full, -3, -1);

print_r($full);
print_r($part);
print_r($part2);
print_r($part3);

// adding elements
$start = [];
$start[] = 10;
echo sizeof($start) . "\n";
$size = array_push($start, 30);
echo $size . " " . sizeof($start) . "\n";
$size = array_unshift($start, 40);
echo $size . " " . sizeof($start) . "\n";
print_r($start);

// removing elements
echo array_pop($start) . "\n";
echo array_shift($start) . "\n";
print_r($start);

// looping through arrays
$arr = range(10, 19);
for ($i = 0; $i < sizeof($arr); $i++) {
    echo "$i) $arr[$i]\n";
}

foreach ($arr as $el) {
    echo "$el\n";
}

foreach ($arr as $key => $value) {
    echo "$key => $value\n";
}

array_walk($arr, function ($key, $value) {
    echo "$key => $value\n";
});

// arrays check
print_r(array_key_exists(2, $arr) . "\n");
print_r(in_array(15, $arr) . "\n");
print_r(array_keys($arr));
print_r(array_values($arr));

// sorting arrays
$names = ['foo', 'bar', 'goo'];
sort($names);
print_r($names);
rsort($names);
print_r($names);

$assArr = ['name' => 'foo', 'surname' => 'bar', 'nickname' => 'goo'];
asort($assArr);
print_r($assArr);
arsort($assArr);
print_r($assArr);
ksort($assArr);
print_r($assArr);
usort($assArr, function ($a, $b) {
    return $a > $b;
});
print_r($assArr);

// merging and comparing arrays
$women = ['faa', 'baa', 'gaa'];
$men = ['foo', 'boo', 'goo'];
$people = array_merge($women, $men);
print_r($people);
print_r(array_diff($women, $men));
$user = ['name' => 'foo'];
$userB = ['surname' => 'goo'];
print_r(array_diff_assoc($user, $userB));
print_r(array_diff_key($user, $userB));

// operations
$numbers = range(0, 9);
foreach ($numbers as $num) {
    $num *= 2;
}
print_r($numbers);
foreach ($numbers as &$num) {
    $num *= 2;
}
print_r($numbers);
foreach ($numbers as $key => $num) {
    $numbers[$key] = $key * 2;
}
print_r($numbers);