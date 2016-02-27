<?php
namespace Classes;

require_once("person.class.php");

class Developer extends \Classes\Person {
    public $skill;

    public function __construct($name, $age, $skill) {
        parent::__construct($name, $age);
        $this->skill = $skill;
    }

    public function __destruct() {
        echo "Destructing Developer\n";
    }

    public function introduce() {
        parent::introduce();
        echo "And I know $this->skill\n";
    }

    public static function whatAmI() {
        echo "I am a Developer\n";
    }
}