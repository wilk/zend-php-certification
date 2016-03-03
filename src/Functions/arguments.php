<?php
    // let's play with function arguments
    // args passed by ref
    function ref_params(&$arr) {
        unset($arr[0]);
    }

    $myArr = array(10, 20, 30);
    var_dump($myArr);
    ref_params($myArr);
    var_dump($myArr);

    // default args
    function default_params($name = "foo", $age = 50) {
        echo "name $name and age $age".PHP_EOL;
    }

    default_params();

    // default args with array and NULL
    function default_extra_params($name, $surname = NULL, $skills = array()) {
        echo "name $name".PHP_EOL;
        echo "surname $surname".PHP_EOL;
        var_dump($skills);
    }

    default_extra_params("test");