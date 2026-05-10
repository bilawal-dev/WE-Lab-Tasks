<?php
// Task 7: Find all prime numbers less than 100 and compute their summation

function isPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

$primes = [];
$sum = 0;

for ($i = 2; $i < 100; $i++) {
    if (isPrime($i)) {
        $primes[] = $i;
        $sum += $i;
    }
}

echo "Primes less than 100: " . implode(", ", $primes) . "<br>";
echo "Sum of primes: " . $sum . "<br>";
