<?php
require_once 'definition.php';
use NS\Dude as Pal;
use const NS\DUDE_VALUE as VALUE; // PHP 5.6+

$pal = new Pal();
$pal->hello();

echo VALUE . "\n";

print_r( get_loaded_extensions() );