<?php
spl_autoload_register(function ($class) {
    echo $class.PHP_EOL;
    require_once "$class.php"; // trying to load the class being instantiated
});

//$foo = new Person; // it will throw an error

class Person {
    public function __autoload() {

    }
}