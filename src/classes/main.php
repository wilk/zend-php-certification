<?php
require_once("person.class.php");
require_once("developer.class.php");

$foo = new \Classes\Person("foo", 44);
$foo->introduce();
\Classes\Person::whatAmI();
echo \Classes\Person::RACE . "\n";

$bar = new \Classes\Developer("bar", 33, "PHP");
$bar->introduce();
\Classes\Developer::whatAmI();