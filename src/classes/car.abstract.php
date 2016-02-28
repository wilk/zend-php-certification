<?php
namespace Classes;

abstract class AbstractCar {
    abstract protected function start($key);
    abstract protected function stop($key);
}