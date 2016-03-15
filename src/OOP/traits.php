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

// inheritable traits
trait Helloer {
    public function hello() {
        parent::hello();
        echo "world".PHP_EOL;
    }
}
class Base {
    public function hello() {
        echo "hello".PHP_EOL;
    }
}
class Dude extends Base {
    use Helloer;
}

$dude = new Dude;
$dude->hello();

// multiple traits
trait Engine {
    public function start() {
        echo "engine started".PHP_EOL;
    }
}

trait Wheel {
    public function cycle() {
        echo "wheel cycle".PHP_EOL;
    }
}

class Car {
    use Engine, Wheel;

    public function init() {
        $this->start();
        $this->cycle();
    }
}

$ferrari = new Car;
$ferrari->init();

// conflicts
trait Cat {
    public function say() {
        echo "meow!".PHP_EOL;
    }
}

trait Dog {
    public function say() {
        echo "woof!".PHP_EOL;
    }
}

class Animal {
    use Cat, Dog {
        Cat::say insteadof Dog; // use Cat::say instead of Dog::say
        Dog::say as bark; // use Dog::say as bark method
    }
}

$odd = new Animal;
$odd->say();
$odd->bark();

// change visibility
trait Hero {
    public function feelBad() {
        echo "I'm feeling bad".PHP_EOL;
    }
}

class SuperHero {
    use Hero {
        feelBad as private;
    }

    public function feeling() {
        $this->feelBad();
    }
}

$sm = new SuperHero;
$sm->feeling();
//$sm->feelBar(); // fatal

// composed traits
trait Hello {
    public function hello() {
        echo "hello";
    }
}

trait World {
    public function world() {
        echo "world".PHP_EOL;
    }
}

trait HelloWorld {
    use Hello, World;
}

class CHelloWorld {
    use HelloWorld;
}

$hw = new CHelloWorld();
$hw->hello();
$hw->world();

// abstract traits
trait AbstractMethod {
    public function hello() {
        echo "hello".PHP_EOL;
    }
    abstract public function say($something);
}

class ClassMethod {
    use AbstractMethod;
    public function say($something) {
        echo $something.PHP_EOL;
    }
}

$cm = new ClassMethod();
$cm->hello();
$cm->say("hello");

// properties
trait Prop {
    public $var = 10;
    static $sta = 20;
}

class CProp {
    use Prop;
}

$prop = new CProp();
echo $prop->var .PHP_EOL;
echo CProp::$sta.PHP_EOL;