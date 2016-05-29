<?php
$dom = new DOMDocument();
$dom->load("./data/test.xml");
$result = $dom->getElementsByTagName("certification");
$certification = $result->item(0);
$certificationName = $certification->firstChild;

echo "certification name: {$certificationName->nodeValue}".PHP_EOL;

$units = $dom->getElementsByTagName("unit");
foreach ($units as $unit) {
    echo "Unit: " . $unit->attributes->item(0)->value. PHP_EOL;
}