<?php

class Generic {
    static $property = 30;
    public $prop = 20;
    const CONSTANT = 10;

    public $same = "a property";

    public function same() {
        return "a method";
    }

    public function method() {
        echo "$this->prop".PHP_EOL;
        echo $this::CONSTANT.PHP_EOL;
    }

    public function checkThis() {
        if (isset($this)) echo "this is set".PHP_EOL;
        else echo "this is not set".PHP_EOL;
    }

    static function staticMethod() {
        echo "static this!".PHP_EOL;
        echo Generic::$property.PHP_EOL;
    }
}

$gen = new Generic;
$gen->method();

// another way to instantiate it
$generic = "Generic";
$gen2 = new $generic;
$gen2->method();

$gen->checkThis();
Generic::checkThis();
Generic::staticMethod();

echo $gen->same, PHP_EOL, $gen->same(), PHP_EOL;

// anonymous functions
class Fn {
    public function __construct() {
        $this->test = function () {
            echo "test has been called",PHP_EOL;
        };
    }
}

$fn = new Fn;
//$fn->test(); // fatal
$storedFn = $fn->test;
$storedFn();

class Full {
    public function __construct() {
        echo "constructor".PHP_EOL;
    }

    public function __destruct() {
        echo "destructor".PHP_EOL;
    }
}

$full = new Full;
unset($full);