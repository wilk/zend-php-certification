<?php

set_error_handler(function ($err, $type) {
    var_dump($err);
    var_dump($type);
});

// this function is called when PHP cannot find a class
// if the class does not exist in folder classes/ than a fatal error is thrown
spl_autoload_register(function ($class) {
    echo $class.PHP_EOL;
    require_once "classes/$class.php"; // trying to load the class being instantiated
});

// Person does not exist in the current file and the person.php is not included 'til is loaded
$foo = new Person("foo");
echo $foo->name.PHP_EOL;

$bar = new Superman(); // this will throw an error