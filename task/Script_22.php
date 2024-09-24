<?php
function calculateAreaOfCircle($radius)
{
    // Check if the radius is a positive number
    if ($radius < 0) {
        return "Radius cannot be negative.";
    }

    // Calculate area
    $area = pi() * pow($radius, 2);

    return $area;
}

// Static value for radius
$radius = 5;

$area = calculateAreaOfCircle($radius);
echo "The area of the circle with radius $radius is $area.";
