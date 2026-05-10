<?php
// Task 8: Concept of Associative Arrays

$student = [
    "name" => "Bilawal",
    "age" => 21,
    "course" => "WE",
    "gpa" => 3.1
];

echo "<h3>Student Details (Associative Array)</h3>";
foreach ($student as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}

// Accessing individual elements
echo "<br>Accessing directly:<br>";
echo "Name: " . $student["name"] . "<br>";
echo "Course: " . $student["course"] . "<br>";
