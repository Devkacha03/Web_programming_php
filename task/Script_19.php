<?php
function isPrime($number)
{
    // Check if the number is less than 2
    if ($number < 2) {
        return false;
    }

    // Check for factors from 2 to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // Not a prime number
        }
    }

    return true; // It's a prime number
}

// Static value to check
$inputNumber = 29;
if ($inputNumber > 0) {
    if (isPrime($inputNumber)) {
        echo "$inputNumber is a prime number.";
    } else {
        echo "$inputNumber is not a prime number.";
    }
} else {
    echo "Please enter a positive integer.";
}
