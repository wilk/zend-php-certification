<?php
    // variables function
    function foo() {
        echo "foo() called".PHP_EOL;
    }
    function bar($name) {
        echo "bar($name) called".PHP_EOL;
    }

    $foo = "foo";
    $bar = "bar";
    $foo();
    $bar("test");

    // variables methods
    class Person {
        public function introduce() {
            echo "hello I'm a " . get_class($this) . PHP_EOL;
        }
    }

    $foo = new Person;
    $introduceMetod = "introduce";
    $foo->$introduceMetod();

    // what about static methods?
    class Car {
        public static $engine = "something";
        public static function engine() {
            echo "engine() called!".PHP_EOL;
        }
    }

    $engine = "engine";
    echo Car::$engine.PHP_EOL;
    Car::$engine();

    // let's play with complex callables
    class Foo {
        public static function bar() {
            echo "bar() called".PHP_EOL;
        }
        public function baz() {
            echo "baz() called".PHP_EOL;
        }
    }

    $caller = array("Foo", "bar");
    $caller();
    $caller = array(new Foo, "baz");
    $caller();
    /*$caller = "Foo::bar"; // only available on PHP 7
    $caller();*/

    // useful functions
    $foo = "foo";
    if (function_exists($foo)) echo "$foo is callable".PHP_EOL;

