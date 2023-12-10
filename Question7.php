// Question 7 Implementation
// Code calculates the volume of a Pizza

<?php

function pizzaVolume($radius, $height)
{
    // Calculate the volume of the pizza
    $volume = $height * pow($radius, 2) * M_PI;

    // Round the volume to the nearest integer
    $roundedVolume = round($volume);

    return $roundedVolume;
}

// Example usage
$radius = 5;
$height = 3;
$totalVolume = pizzaVolume($radius, $height);

echo "The total volume of the pizza is: $totalVolume cubic units";
?>
