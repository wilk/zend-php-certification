<?php

namespace Classes;

require_once("car.abstract.php");
require_once("car.trait.php");

class Car extends \Classes\AbstractCar {
    use \Classes\CarUtils;
    public function start($key) {
        echo "start the engine with $key\n";
    }

    public function stop($key) {
        echo "stop the engine with $key\n";
    }
}