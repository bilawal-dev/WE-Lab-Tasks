<?php
// Task 9: Function that takes a five-digit integer and returns its digit summation

function digitSum($number) {
    $sum = 0;
    while ($number > 0) {
        $sum += $number % 10;
        $number = (int)($number / 10);
    }
    return $sum;
}

$num = 12345;
echo "The summation of digits of $num is: " . digitSum($num) . "<br>";
