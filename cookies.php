<?php
$cookie1 = "1920x1080px";
$cookie2 = "Admin";
setcookie("PC[Screen_Resolution]", $cookie1);
setcookie("PC[PC_Name]", $cookie2);
if ( isset($_COOKIE['PC'])) {
    foreach($_COOKIE['PC'] as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name : $value <br/>\n";
    }
}