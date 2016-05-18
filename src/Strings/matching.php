<?php
$str = "Test";
echo strpos($str, "s").PHP_EOL;
echo strpos($str, "st").PHP_EOL;
echo stripos($str, "t").PHP_EOL;
echo strcmp($str, "tst").PHP_EOL;
echo strncmp($str, "tst", 1).PHP_EOL;
echo levenshtein($str, "tst").PHP_EOL;
echo strstr($str, "es").PHP_EOL;
echo strchr($str, "es").PHP_EOL;
echo substr($str, 0, 3).PHP_EOL;