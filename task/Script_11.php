<?php
// Function to check if a number is even or odd
function isEvenOrOdd($number)
{
    return ($number % 2 === 0) ? 'even' : 'odd';
}

// Example usage
$number = 7; // You can change this value

$result = isEvenOrOdd($number);
echo "The number " . $number . " is " . $result . ".";
