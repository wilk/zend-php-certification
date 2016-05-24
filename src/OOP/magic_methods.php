<?php

// __sleep and __wakeup methods
class Connection {
    private $conn;
    protected $host;

    public function __construct($host) {
        $this->host = $host;
        $this->conn = $this->connect($host);
    }

    public function connect($host) {
        echo "connecting to $host".PHP_EOL;
        return 'connection';
    }

    public function __sleep() { // for serialization
        return ['conn', 'host'];
    }

    public function __wakeup() { // for unserialization
        $this->conn = $this->connect($this->host);
    }
    
    // called when getting an inaccessible property
    public function __get($property) {
        echo "cannot get property $property".PHP_EOL;
    }

    // called when setting an inaccessible property
    public function __set($property, $value) {
        echo "cannot set property $property to $value".PHP_EOL;
    }

    // called when unsetting an inaccessible property
    public function __unset($property) {
        echo "cannot unset property $property".PHP_EOL;
    }

    // called when checking if an inaccessible property is set
    public function __isset($property) {
        echo "cannot check if property $property is set".PHP_EOL;
    }
}

$db = new Connection("localhost");
$sr = serialize($db);
var_dump($sr);
$ds = unserialize($sr);
var_dump($ds);

$conn = $db->conn.PHP_EOL;
$db->conn = "test conn";

unset($db->host);
$result = isset($db->host);
$result = empty($db->host);

class Politician {
    // called when calling a non-existing method
    public function __call($method, $arguments) {
        echo __CLASS__ . " has no method called $method".PHP_EOL;
    }

    // called when calling a non-existing static method
    public function __callStatic($method, $arguments) {
        echo __CLASS__ . " has no static method called $method".PHP_EOL;
    }
}

$foo = new Politician();
$foo->honesty();
Politician::loyalty();

class CallableObject {
    // called when calling an object as a function
    public function __invoke($number)
    {
        return $number ** 2;
    }
}

$obj = new CallableObject();
echo $obj(10).PHP_EOL;

class DebugObject {
    private $private = 10;
    protected $protected = 20;
    public $public = 30;

    // called when this class is passed to var_dump function
    // that will print every methods and properties, both public, private and protected
    public function __debugInfo()
    {
        return [
            "public" => $this->public
        ];
    }
}

$obj = new DebugObject();
var_dump($obj);