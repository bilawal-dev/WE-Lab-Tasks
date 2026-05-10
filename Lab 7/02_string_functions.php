<?php
// Task 2: String functions - reverse, word count, position of "be"

$str = "I am string to be tested";

echo "Original: " . $str . "<br>";
echo "Reversed: " . strrev($str) . "<br>";
echo "Word count: " . str_word_count($str) . "<br>";
echo "Position of 'be': " . strpos($str, "be") . "<br>";
