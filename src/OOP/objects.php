<?php
require_once "classes/Person.php";
require_once "classes/Skill.php";

// cloning
$skill = new Skill("PHP");
$foo = new Person("foo");
$foo->setSkill($skill);

// shallow copy of the object
// $skill has the same reference both in $foo and $bar
// Person::__clone is being called but not found
$bar = clone $foo;

echo $foo->name.PHP_EOL;
echo $foo->getSkill()->name.PHP_EOL;
echo $bar->name.PHP_EOL;
echo $bar->getSkill()->name.PHP_EOL;

// serializing/unserializing

// Person::__sleep is being called but not found
$str = serialize($foo);
var_dump($str);
file_put_contents("foo.txt", $str);
$str2 = file_get_contents("foo.txt");
var_dump($str2);
// Person::__wakeup is being called but not found
$boo = unserialize($str2);
echo $boo->name.PHP_EOL;
echo $boo->getSkill()->name.PHP_EOL;

// casting object to string
// __toString method is being called
echo $boo.PHP_EOL;
//echo $skill.PHP_EOL; // it will throw a fatal error

class ParentException extends Exception {}
class ChildException extends ParentException {}

try {
    throw new ChildException("my error");
}
catch (ParentException $err) {
    echo "ParentException: " . $err->getMessage().PHP_EOL;
}
catch (ChildException $err) {
    echo "ChildException: " . $err->getMessage().PHP_EOL;
}
catch (Exception $err) {
    echo "Exception: " . $err->getMessage().PHP_EOL;
}
finally {
    echo "Finally, go ahead!".PHP_EOL;
}