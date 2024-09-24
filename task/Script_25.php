<?php
// Static values for the two numbers
$num1 = 10; // You can change this value
$num2 = 20; // You can change this value

echo "Before swapping: num1 = $num1, num2 = $num2\n";

// Swapping using arithmetic operators
$num1 = $num1 + $num2; // Step 1: Add both numbers
$num2 = $num1 - $num2; // Step 2: Subtract the new num2 from the sum to get num1
$num1 = $num1 - $num2; // Step 3: Subtract the new num2 from the sum to get num2

echo "After swapping: num1 = $num1, num2 = $num2\n";
