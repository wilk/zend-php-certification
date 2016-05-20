<?php
require_once "classes/Person.php";
require_once "classes/Skill.php";

// cloning
$skill = new Skill("PHP");
$foo = new Person("foo");
$foo->setSkill($skill);

// shallow copy of the object
// $skill has the same reference both in $foo and $bar
$bar = clone $foo;

echo $foo->name.PHP_EOL;
echo $foo->getSkill()->name.PHP_EOL;
echo $bar->name.PHP_EOL;
echo $bar->getSkill()->name.PHP_EOL;

// serializing/unserializing

$str = serialize($foo);
var_dump($str);