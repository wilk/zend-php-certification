<?php
    // executing after function (hoisting)
    after();
    function foo($arg1) {
        echo "testing foo with $arg1".PHP_EOL;
        return 10;
    }

    $result = foo(20);
    echo $result.PHP_EOL;

    function after() {
        echo "executing fn after".PHP_EOL;
    }

    //notHoisted(); // this won't work in any case

    if ($result === 10) {
        function notHoisted() {
            echo "calling notHoisted function".PHP_EOL;
        }
    }

    notHoisted(); // this work with $result equals 10

    // let's play with the function scope
    function goo() {
        echo "calling goo()".PHP_EOL;

        function too() {
            echo "calling too()".PHP_EOL;
        }
    }

    //too(); // won't work
    goo();
    too(); // it works now because it has been defined

    // recursion
    function recursion($value) {
        echo "recursion($value)".PHP_EOL;
        if ($value === 0) return 0;

        return recursion(--$value);
    }

    $result = recursion(10);
    echo $result.PHP_EOL;

    function optArgs($first, $second) {
        echo "test $first $second".PHP_EOL;
    }

    try {
        optArgs(10);
        echo "done".PHP_EOL;
    }
    catch (Exception $err) {
        echo $err;
    }

    function scope() {
        $foo = 10;
        
        function inner() {
            echo "foo -> $foo".PHP_EOL;
        }
        
        inner();
    }

    scope();