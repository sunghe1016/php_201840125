<?php

//include "class_01.php";
//include "class_02.php";

//greeting();
include "android.php";

$obj1 = new left;


$obj1->greeting();
$obj1->daelim();
echo"<br>";

$proerty = "name";
echo $obj1->$proerty . " 입니다<br>";
echo "영어 코드는 = ". $obj1::ENGLISH . "<br>";

$obj2 = new right;
$odj2->name = "대숙이";
$result = $obj2->greeting();
var_dump($result);
echo "<br>";

$obj2->daelim();
$result->daelim();

echo "---<br>";
$obj2->greeting()->daelim()->foo();

echo "---<br>";
echo foo::$aaa;
foo::hello();

