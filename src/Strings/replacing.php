<?php
$str = "Delicious food";
echo str_replace("foo", "bar", $str).PHP_EOL;
echo str_ireplace("del", "jell", $str).PHP_EOL;

$str2 = "A fool foo walking into a bar";
$occursCounter = 0;
$replaced = str_replace("foo", "boo", $str2, $occursCounter);
echo $replaced.PHP_EOL;
echo $occursCounter.PHP_EOL;

// array replacement
$str3 = "Hot black coffee";
echo str_replace(["black", "coffee"], ["green", "tea"], $str3).PHP_EOL;

// replace substr
$str = "this is a long string";
echo substr_replace($str, "string", 10).PHP_EOL;

// strtr example
$str = "àpperò!";
echo strtr($str, "à", "a").PHP_EOL;
echo strtr($str, ["à" => "a", "ò" => "o"]).PHP_EOL; // works better