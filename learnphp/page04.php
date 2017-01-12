<?php
$array = array(
    1    => "a",
    "2"  => "b",
    "1.5"  => "c",
    "true" => "d",
);
var_dump($array);

$array = array(
    100    => "a",
    "b",
    "c",
    "d",
);
var_dump($array);

$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "yellow"
         )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);

$array["secret"] = "password";
$array[] = "newavalue";

var_dump($array);
?>