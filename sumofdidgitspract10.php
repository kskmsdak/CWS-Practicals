<?php
// Get input from command line or set a default value
$number = isset($argv[1]) ? $argv[1] : 12345;

if (!is_numeric($number)) {
    echo "Please provide a valid number as argument\n";
    exit(1);
}

$sum = 0;
$originalNumber = $number;
$number = abs($number);

while ($number > 0) {
    $digit = $number % 10;
    $sum += $digit;
    $number = (int)($number / 10);
}

echo "Sum of digits in $originalNumber is: $sum\n";
?>