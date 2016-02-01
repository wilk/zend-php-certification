<?php
namespace NS;

function introduce() {
    echo "hello dude\n";
}

class Dude {
    function hello() {
        echo "hello from " . __CLASS__ . "\n";
    }
}

const DUDE_VALUE = 'huge';