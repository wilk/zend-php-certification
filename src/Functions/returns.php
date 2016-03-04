<?php
    function sum($a = 0, $b = 0) {
        return $a + $b;
    }
    echo sum(10, 20).PHP_EOL;

    // return a list of things
    function list_sum($a = 0, $b = 0) {
        return [$a, $b, $a + $b];
    }

    list($first, $second, $sum) = list_sum(10, 20);
    echo "$first $second $sum".PHP_EOL;

    // ref functions
    class Car {
        public $name = 'Car';

        public function &getName() {
            return $this->name;
        }
    }

    $ferrari = new Car;
    $carName = &$ferrari->getName(); // a reference is returned from the function
    $refCarName = &$carName; // second reference for car name
    echo $carName.PHP_EOL;
    $ferrari->name = "Ferrari";
    echo $carName.PHP_EOL;
    $refCarName = "Fiat";
    echo $carName.PHP_EOL;

    // returning types (only available on PHP 7)
    /*function sum_type(float $a, float $b): float {
        return $a + $b;
    }
    $result = sum_type(10.56, 55.43);

    // returning object
    class A {}
    class B extends A {}

    function obj_type(A $a): A {
        return $a;
    }

    $classA = obj_type(new B);

    interface I {}
    class IA implements I {}
    class IB extends IA {}

    function interface_type(I $i): I {
        return new IB;
    }

    $interfaceI = interface_type(new IA);*/