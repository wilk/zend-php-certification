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

    // typed arguments
    function typed_args(array $names) {
        echo count($names).PHP_EOL;
    }
    //typed_args("hello"); // throws a fatal error
    typed_args([10,20,30]);

    class A {}
    class B extends A {}
    class C {}

    function class_typed_args(A $a) {
        echo get_class($a) . PHP_EOL;
    }
    class_typed_args(new A());
    class_typed_args(new B());
    //class_typed_args(new C()); // throws a fatal error

    interface I {}
    class IA implements I {}
    class IB extends IA {}
    class IC extends IB {}

    function interface_typed_args(I $i) {
        echo get_class($i) . PHP_EOL;
    }
    interface_typed_args(new IA());
    interface_typed_args(new IB());
    interface_typed_args(new IC());

    function nullable_typed_args(I $i = null) {
        echo get_class($i) . PHP_EOL;
    }

    nullable_typed_args(new IA());
    nullable_typed_args(); // throws a warning

    // weak typing (only available on PHP 7)
    /*function weak_coerced_typed_args(int $a, int $b) {
        return $a + $b;
    }

    echo weak_coerced_typed_args(10, 20).PHP_EOL;
    echo weak_coerced_typed_args(10.40, 10.50).PHP_EOL;*/

    // variable-length args list (only available on PHP 5.6)
    /*function length_typed_args(...$args) {
        foreach ($args as $arg) echo $arg.PHP_EOL;
    }
    length_typed_args(...[10, 20, 30]);

    function length_hint_typed_args(string ...$args) {
        foreach ($args as $arg) echo $arg.PHP_EOL;
    }

    length_hint_typed_args("hello", "cruel", "world");*/

    // arguments functions for PHP older versions
    function use_args_func() {
        $count = func_num_args();
        echo "$count arguments".PHP_EOL;
        $args = func_get_args();
        foreach ($args as $arg) echo $arg.PHP_EOL;
    }
    use_args_func("hello", "cruel", "world");