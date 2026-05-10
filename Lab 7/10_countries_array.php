<?php
// Task 10: Array of countries/cities - print, sort, add cities, print again

$places = ["Pakistan", "England", "India", "America", "Dubai", "Saudi Arabia",
           "Mexico", "Turkey", "Holland", "Karachi", "Peshawar", "Lahore"];

// Print separated by commas using a loop
echo "<h3>Original Array (comma separated):</h3>";
for ($i = 0; $i < count($places); $i++) {
    echo $places[$i];
    if ($i < count($places) - 1) echo ", ";
}

// Sort and print in unordered list
sort($places);
echo "<h3>Sorted Array (unordered list):</h3><ul>";
foreach ($places as $place) {
    echo "<li>$place</li>";
}
echo "</ul>";

// Add new cities
array_push($places, "Quetta", "Faisalabad", "Multan");

// Sort again and print in unordered list
sort($places);
echo "<h3>After Adding Cities & Sorting (unordered list):</h3><ul>";
foreach ($places as $place) {
    echo "<li>$place</li>";
}
echo "</ul>";
