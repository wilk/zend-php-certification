<?php
class A {
    static public function foo() {
        static::who(); // forwarding call, it depends on the context
    }

    static public function who() {
        echo "A";
    }
}

class B extends A {
    static public function test() {
        A::foo(); // non-forwarding call, A::foo
        self::foo(); // forwarding call, C::foo
        parent::foo(); // forwarding call, C::foo
    }
}

class C extends B {
    static public function who() {
        echo "C";
    }
}

// test is forwarded implicitly
C::test(); // ACC