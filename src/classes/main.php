<?php
require_once("person.class.php");
require_once("developer.class.php");
require_once("car.class.php");

$foo = new \Classes\Person("foo", 44);
$foo->introduce();
\Classes\Person::whatAmI();
echo \Classes\Person::RACE . "\n";

$bar = new \Classes\Developer("bar", 33, "PHP");
$bar->introduce();
\Classes\Developer::whatAmI();

$ferrari = new \Classes\Car();
$ferrari->start("a key");
$ferrari->stop("a key");
$ferrari->showEngine();