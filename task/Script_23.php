<?php
function findLargest($num1, $num2, $num3)
{
    // Initialize largest with the first number
    $largest = $num1;

    // Compare with the second number
    if ($num2 > $largest) {
        $largest = $num2;
    }

    // Compare with the third number
    if ($num3 > $largest) {
        $largest = $num3;
    }

    return $largest;
}

// Static values for comparison
$num1 = 15;
$num2 = 27;
$num3 = 22;

$largestNumber = findLargest($num1, $num2, $num3);
echo "The largest among $num1, $num2, and $num3 is $largestNumber.";
