<?php
// Task 6: Remove duplicates from a sorted list

$list = [1, 1, 2, 2, 3, 4, 5, 5];
echo "Original: " . implode(", ", $list) . "<br>";

$unique = array_values(array_unique($list));
echo "After removing duplicates: " . implode(", ", $unique) . "<br>";
