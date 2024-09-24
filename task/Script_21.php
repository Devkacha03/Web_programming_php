<?php
function isPalindrome($number)
{
    // Convert the number to a string
    $strNumber = strval($number);

    // Reverse the string
    $reversedNumber = strrev($strNumber);

    // Check if the original string and the reversed string are the same
    return $strNumber === $reversedNumber;
}

// Static value to check
$inputNumber = 121;
if (isPalindrome($inputNumber)) {
    echo "$inputNumber is a palindrome.";
} else {
    echo "$inputNumber is not a palindrome.";
}
