<?php

interface IPerson {
    public function introduce();
    public function setName($name);
    const TEST = 10;
}

class Person implements IPerson {
    public function introduce() {
        echo "Hello, I'm a person!".PHP_EOL;
    }

    public function setName($name) {
        echo "Hello, my name is $name".PHP_EOL;
    }
}

$foo = new Person;
$foo->introduce();
$foo->setName("foo");
echo Person::TEST.PHP_EOL;

// extendable interfaces
interface IA {
    public function method();
}
interface IB extends IA {
    public function method2();
}
class A implements IB {
    public function method() {
        echo "method".PHP_EOL;
    }

    public function method2() {
        echo "method2".PHP_EOL;
    }
}

$a = new A;
$a->method();
$a->method2();

// multiple inheritance
interface IAA {
    public function method();
}
interface IAB {
    public function method2();
}
interface IAC extends IAA, IAB {
    public function method3();
}

class AC implements IAC {
    public function method() {
        echo "method".PHP_EOL;
    }
    public function method2() {
        echo "method2".PHP_EOL;
    }
    public function method3() {
        echo "method3".PHP_EOL;
    }
}

$ac = new AC;
$ac->method();
$ac->method2();
$ac->method3();