<?php
// Set the default timezone (optional)
date_default_timezone_set('UTC');

// Get current date, time, and day
$currentDate = date("d/m/Y");  // Month day, Year
$currentTime = date("h:i:s A"); // Hours:Minutes:Seconds AM/PM
$currentDay = date("l");        // Full day name

// Display the information
echo "Today is: " . $currentDay . "\n";
echo "Current Date: " . $currentDate . "\n";
echo "Current Time: " . $currentTime . "\n";
?>