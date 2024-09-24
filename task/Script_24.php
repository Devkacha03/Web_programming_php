<?php
function calculateSquareRoot($number)
{
    // Check if the number is non-negative
    if ($number < 0) {
        return "Square root is not defined for negative numbers.";
    }

    // Calculate square root
    $squareRoot = sqrt($number);

    return $squareRoot;
}

// Static value to check
$inputNumber = 16;

$squareRoot = calculateSquareRoot($inputNumber);
echo "The square root of $inputNumber is $squareRoot.";
