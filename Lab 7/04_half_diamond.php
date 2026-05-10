<?php
// Task 4: Half diamond pattern

$max = 6;

// Upper half (1 to max)
for ($i = 1; $i <= $max; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}

// Lower half (max-1 down to 1)
for ($i = $max - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
