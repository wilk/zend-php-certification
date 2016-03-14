<?php

class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        echo "hello my name is $this->name and I'm $this->age".PHP_EOL;
    }

    public function override() {
        echo "I can be overriden".PHP_EOL;
    }

    final public function cannotOverride() {
        echo "I cannot be overriden".PHP_EOL;
    }
}

class Developer extends Person {
    public $skill;

    public function __construct($name, $age, $skill) {
        parent::__construct($name, $age);
        $this->skill = $skill;
    }

    public function knows() {
        echo "I $this->name know $this->skill".PHP_EOL;
    }

    public function override() {
        parent::override();
        echo "overridden!".PHP_EOL;
    }

    /*final public function cannotOverride() {
        echo "I cannot be overriden".PHP_EOL;
    }*/ // fatal
}

$foo = new Person("foo", 20);
$bar = new Developer("bar", 30, "PHP");

$foo->introduce();
$bar->introduce();
$bar->knows();
$foo->override();
$foo->cannotOverride();
$bar->override();
$bar->cannotOverride();

// abstract class
abstract class ANinja {
    abstract public function kill(Person $someone);
    abstract protected function isOk();

    public function knowledge() {
        echo "this is a common method, already implemented!".PHP_EOL;
    }
}

class Ninja extends ANinja {
    public function kill(Person $someone) {
        echo "killing $someone->name".PHP_EOL;
        $this->isOk();
    }

    protected function isOk() {
        echo "I'm ok!".PHP_EOL;
    }
}

$ninja = new Ninja;
$ninja->kill(new Person("foo", 30));