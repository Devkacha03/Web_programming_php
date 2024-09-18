<?php
// Function to convert Celsius to Fahrenheit
function celsiusToFahrenheit($celsius)
{
    return ($celsius * 9 / 5) + 32;
}

// Example usage
$celsius = 25; // You can change this value

$fahrenheit = celsiusToFahrenheit($celsius);
echo $celsius . " degrees Celsius is " . $fahrenheit . " degrees Fahrenheit.";
