<?php
// Task 1: Integer, float, string, constant variable. Concatenate two strings.

$intVar = 42;
$floatVar = 3.14;
$stringVar = "Hello";
define("MY_CONSTANT", "I am constant");

echo "Integer: " . $intVar . "<br>";
echo "Float: " . $floatVar . "<br>";
echo "String: " . $stringVar . "<br>";
echo "Constant: " . MY_CONSTANT . "<br>";

// Concatenate two strings
$str1 = "Hello";
$str2 = " World";
echo "Concatenated: " . $str1 . $str2 . "<br>";
