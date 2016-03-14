<?php

trait Introducer {
    public function introduce() {
        echo "hello! my name is $this->name".PHP_EOL;
    }
}

class Person {
    public $name;
    use Introducer;

    public function __construct($name) {
        $this->name = $name;
    }
}

$foo = new Person("foo");
$foo->introduce();