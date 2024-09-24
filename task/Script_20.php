<?php
function factorial($number)
{
    // Check for non-negative integer
    if ($number < 0) {
        return "Factorial is not defined for negative numbers.";
    }

    // Base case: factorial of 0 is 1
    if ($number === 0) {
        return 1;
    }

    $result = 1;
    // Calculate factorial iteratively
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }

    return $result;
}

// Static value to check
$inputNumber = 5;

$result = factorial($inputNumber);
echo "The factorial of $inputNumber is $result.";
