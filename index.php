<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$str1 = "str1";
$str2 = "str2";
$str3 = $str1 . $str2;
echo "Concatenation: " . $str3 . '<br/>';

$foreachArray = array(2, 4);
foreach($foreachArray as &$value) {
   $value = $value * $value;
}
print_r($foreachArray);
echo '<br/>';

$assosaiteArray = array("Here" => "1", "We" => "2", "Go" => "3");
echo $assosaiteArray["We"] . '<br/>';  //2

$expStr = "Here is a text";
$expRes = explode(' ', $expStr);
print_r($expRes);
echo '<br/>';
$implStr = implode(',', $expRes);
print_r($implStr);
echo '<br/>';

function dereferencing() {
    return array(1,2,3);
}
echo dereferencing()[2] . '<br/>'; //should be 3

$var = 'test';
echo settype($var, 'integer');
echo gettype($var) . '<br/>';
$var = (string) $var;
echo gettype($var) . '<br/>';

class TestClass {
    public $foo;
    public function __construct($foo) {
        $this->foo = $foo;
    }
    public function __destruct() {
        echo "Destruction <br/>";
    }
    public function __toString() {
        return $this->foo . "Parent";
    }
}
$obj = new TestClass("ClassObj");
echo $obj . '<br/>';
class ChildTestClass extends TestClass {
    public $foo;
    public function __toString() {
        return $this->foo . "Child";
    }
}
$objChild = new ChildTestClass("ClassObj");
echo $objChild . '<br/>';

class Singleton {                                        //Singleton
    private static $instances = [];

    protected function __construct() { }
    protected function __clone() { }
    public function __wakeup() {
        throw new \Exception("Cannot unserialize singleton");
    }
    public static function getInstance() {
        $subclass = static::class;
        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static;
        }
        return self::$instances[$subclass];
    }
}
class SingletonUsage extends Singleton
{
    private $hashmap = [];

    public function getValue(string $key): string
    {
        return $this->hashmap[$key];
    }

    public function setValue(string $key, string $value): void
    {
        $this->hashmap[$key] = $value;
    }
}
$singleObj = SingletonUsage::getInstance();
$singleObj->setValue("1field", "value1");
$singleObj->setValue("2field", "value2");
$singleObj->setValue("3field", "value3");
$singleObjSecond = SingletonUsage::getInstance();
if ("value1" == $singleObjSecond->getValue("1field") && "value2" == $singleObjSecond->getValue("2field") && "value3" == $singleObjSecond->getValue("3field")) {
    echo "Singleton works!" . "<br/>";
}
$fakeObj = new Singleton();


// function copyrightDate($startYear) {
//     $curYear = date('Y');
//     if ( $startYear < $curYear ) {
//         $curYear = date('y');
//         return "©" . $startYear . '-' . $curYear;
//     }
//     else {
//         return "©" . $startYear;
//     }
// }
// echo copyrightDate(2016) . '<br/>';
?>