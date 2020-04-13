<?php
class Magic {
    private $arr = array();
    public function __set($name, $value) {
        echo "Pull '$value' in '$name'" . "<br/>";
        $this->arr[$name] = $value;
    }
    public function __get($name) {
        echo "Taking '$name'" . "<br/>";
        if (array_key_exists($name, $this->arr)) {
            return $this->arr[$name];
        }
        return null;
    }
    public function __call($name, $arguments) {    //turns on when we calling non-existent method in object context
        echo "Calling '$name' " . implode(', ', $arguments). "\n";
    }
}
$obj = new Magic;
$obj->box = "item";  //calling object
if ( $obj->fake == null) {
    echo "Fail to take" . "<br/>";
}
echo $obj->box . "<br/>";
$obj->FakeMethod("that doesn't exist");