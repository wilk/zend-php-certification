<?php

namespace Classes;
require_once("human.interface.php");

class Person implements \Classes\Human {
    public $name;
    public $age;
    private $fullname;

    const RACE = "hooman";

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        $this->fullname = "$name $age";
    }

    public function __destruct() {
        echo "Destructing Person\n";
    }

    private function getFullname() {
        return $this->fullname;
    }

    public function introduce() {
        echo "Hi I'm $this->name and I'm $this->age\n " . $this->getFullname() . "\n";
    }

    public static function whatAmI() {
        echo "I'm a Person\n";
    }
}