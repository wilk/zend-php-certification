<?php
$dom = new DOMDocument("UTF-8", "1.0");
$dom->load("./data/test.xml");
$xpath = new DOMXPath($dom);
$certification = $xpath->query("//certification");
var_dump($certification);

//echo "certification name: {$certificationName->nodeValue}".PHP_EOL;

$units = $dom->getElementsByTagName("unit");
foreach ($units as $unit) {
    echo "Unit: " . $unit->attributes->item(0)->value. PHP_EOL;
}