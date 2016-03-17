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
}

$db = new Connection("localhost");
$sr = serialize($db);
var_dump($sr);
$ds = unserialize($sr);
var_dump($ds);