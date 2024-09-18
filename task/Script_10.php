<?php
// Function to calculate the area of a rectangle
function calculateRectangleArea($length, $width)
{
    return $length * $width;
}

// Example usage
$length = 10; // You can change this value
$width = 5;   // You can change this value

$area = calculateRectangleArea($length, $width);
echo "The area of the rectangle is: " . $area;
