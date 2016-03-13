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

    // closures
    $sorter = function ($a, $b) {
        return $a < $b;
    };

    $iterater = function ($list, $sorterFn) {
        $sortedList = [];
        for ($i = 0; $i < count($list) - 1; $i++) {
            $first = $list[$i];
            $last = $list[$i+1];
            $sortedList[] = $sorterFn($first, $last) ? $first : $last;
        }

        return $sortedList;
    };

    $starting = [6,5,4,3,2,1,0];
    print_r($starting);
    $result = $iterater($starting, $sorter);
    print_r($result);

    // closures scope
    $message = "hello";
    $closure = function () {
        echo $message . PHP_EOL; // php notice: undefined variable
    };
    $closure();

    $closureUse = function () use ($message) {
        echo $message . PHP_EOL;
    };
    $closureUse();
    $message = "changed to world!";
    $closureUse(); // it will print "hello" not "changed to world!"

    $closureRef = function () use (&$message) {
        echo $message . PHP_EOL;
    };
    $closureRef();
    $message = "hello world";
    $closureRef();

    // inherited vars
    $granClosure = function () use ($message) {
        $closure = function () {
            echo $message . PHP_EOL; // undefined var

            $childClosure = function () use ($message) { // undefined var
                echo $message . PHP_EOL;
            };

            $childClosure();
        };

        $closure();
    };

    $granClosure();

    // inside a function and...
    function fn() {
        function lol() {
            echo "lolled".PHP_EOL;
        }
    }

    fn();
    lol();

    // inside a closure
    $fn = function () {
        $lol = function () {
            echo "lolled".PHP_EOL;
        };
    };

    $fn();
    //$lol(); // fatal