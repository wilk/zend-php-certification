<?php echo "test"?>

<?php # echo "test"?>

<?php if (true): ?>
    <div>hello world</div>
<?php endif; ?>

<p>this is an HTML test: start</p>
<?php
    echo "<ul>\n";
    foreach (array("foo", "bar") as $name) {
        echo "\t<li>$name</li>\n";
    }
    echo "</ul>\n";
?>
<p>this is an HTML test: finish</p>

<?php
    // some operators
    $a = 10;
    $b = 10;
    $sum = $a + $b;
    $mul = $a * $b;
    //$mull = $a ** $b;
    $div = $a / $b;
    $diff = $a - $b;

    echo "$sum, $mul, $mull, $div, $diff\n";

    // let's play with some booleans
    $exp = True;
    if ($exp) $exp = false;
    $false = 0;
    if (!$false) echo "0 is false\n";
    $false = "";
    if (!$false) echo "\"\" is false\n";
    $false = 0.0;
    if (!$false) echo "0.0 is false\n";
    $false = array();
    if (!$false) echo "[] is false\n";
    $false = null;
    if (!$false) echo "null is false\n";

    // wanna talk about integers and doubles?
    $num = 10;
    echo "$num is an int\n";
    $num = -10;
    echo "$num is an int\n";
    $num = 010;
    echo "$num is an octal\n";
    $num = 0x10;
    echo "$num is a hexadecimal\n";
    $num = 0b10;
    echo "$num is a binary\n";

    $float = 203459598509438505;
    $int = 39944;
    $div = (int) (10 / 7);
    echo "$div\n";
    $int = (int) "1234.45";
    echo "$int from a string\n";
    $float = (float) "1234.45";
    echo "$float from a string\n";

    // what about string?
    $long_text = <<<WOOOOT
mmm that's quite interesting
more rows right?
what about quoting? "that's a quote!"
and variables? $float is evalued, right?\n
WOOOOT;
    echo $long_text;

    $names = ["foo", "bar", "far", "boo"];
    $index = 3;
    echo "ok, let's do it: $names[0] - $names[1]" . PHP_EOL;
    echo "what about this: $names[$index]" . PHP_EOL;
    echo "I like PHP_EOL var" . PHP_EOL;
    echo "but"."I"."really"."hate"."this"."kind"."of"."string"."concatenation".PHP_EOL;

    class Person {
        public $name = "";
        public $hobbies = [];

        public function __construct($name, $hobbies) {
            $this->name = $name;
            $this->hobbies = $hobbies;
        }

        public function introduce() {
            return [$this->name, $this->hobbies];
        }
    }

    class Hobby {
        public $name = "";

        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }

    $foo = new Person("foo", [new Hobby("soccer"), new Hobby("hacking"), new Hobby("studying php")]);
    list($name, $hobbies) = $foo->introduce();
    echo "$name".PHP_EOL;

    $text = "hello dude";
    echo $text[2].PHP_EOL;
    echo $text['2'].PHP_EOL;

    // associative arrays
    $ar = [
        "test" => "dude",
        "dude" => [
            "hell" => "yeah",
            10 => "and now?"
        ]
    ];
    var_dump($ar);
    echo "{$ar['dude']['10']}".PHP_EOL;

    $empty = [];
    $empty[] = 10;
    $empty[] = 'asd';
    var_dump($empty);
    unset($empty[0]);
    var_dump($empty);

    // let's play with foreach
    $full = [
        "zip" => "zap",
        "10" => [
            "dude" => "noice"
        ]
    ];
    foreach ($full as $el) var_dump($el);
    foreach (array_values($full) as $el) var_dump($el);
    foreach (array_keys($full) as $el) var_dump($el);
    echo "count stands for length: " . count($full) . PHP_EOL;

    $ar = ["asd" => "lol", "lol" => "asd"];
    foreach ($ar as $key => $value) {
        echo "$key -> $value".PHP_EOL;
    }

    // let's play with objects
    $obj = (object) ["name" => "loller"];
    echo "$obj->name".PHP_EOL;
    $obj = (object) ["method" => function () {echo "it's really working!!";}];
    // echo $obj->method(); // it doesn't work... fuck
    var_dump($obj);
    function parrot($text) {echo $text.PHP_EOL;}
    parrot("dude");
    /*$obj = (object) ["parrot" => parrot]; // it's not working as expected...
    echo $obj->parrot();*/

    // variables? ok, let's do it
    $origin = 10;
    $ref = &$origin;
    echo $origin.PHP_EOL;
    $ref += 10;
    echo $origin.PHP_EOL;

    echo $undefined.PHP_EOL; // PHP Notice: undefined
    if (isset($undefined)) echo "PHP sucks".PHP_EOL;

    // predefined vars?
    echo "GLOBALS".PHP_EOL;
    var_dump($GLOBALS["origin"]);
    var_dump($argv);
    var_dump($argc);
    var_dump($_ENV);

    $a = 10;
    function test() {
        $a = 20;
        echo $a.PHP_EOL;
        global $a;
        echo $a.PHP_EOL;
        echo $GLOBALS['a'].PHP_EOL;
    }
    test();

    function staticVar() {
        static $sum;
        $sum++;
        echo $sum.PHP_EOL;
    }
    staticVar();
    staticVar();
    staticVar();

    function recursive() {
        static $counter = 0;

        echo $counter.PHP_EOL;
        if ($counter < 10) {
            $counter++;
            return recursive();
        }
    }

    recursive();

    // let's play with some constants
    define("DUDE", "DUDEZ");
    echo DUDE.PHP_EOL;
    echo Dude.PHP_EOL; // PHP Notice: undefined constant Dude
    const DUDES = 20;
    echo DUDES.PHP_EOL;

    //const NAMES = ["foo", "bar"];
    //const COMPOSIBLE = "COMPOSIBLE". NAMES[0];
    //echo COMPOSIBLE . PHP_EOL;

    echo __FILE__.PHP_EOL;
    echo __DIR__.PHP_EOL;
    echo __LINE__.PHP_EOL;

    // condition scope
    $test = 10;
    if ($test == 10) {
        $test_d = 20; // variable hoisting
    }
    echo $test_d.PHP_EOL;

    // ticks
    declare(ticks=1) { // same for encoding=utf-8 and strict_types
        function tick_handler() {
            echo "tick_handler() called".PHP_EOL;
        }

        register_tick_function(tick_handler);

        if (true) {
            $a = 10;
        }
        $b = 20;
    }
?>