// Question 6 Implementation
// Code to compress an array into a string

<?php

function compress($chars)
{
    $result = '';
    $count = 1;

    for ($i = 0; $i < count($chars); $i++) {
        // Check if the current character is the same as the next one
        if ($i < count($chars) - 1 && $chars[$i] == $chars[$i + 1]) {
            $count++;
        } else {
            // Append the result based on the count of repeating characters
            $result .= ($count > 1) ? $chars[$i] . $count : $chars[$i];
            $count = 1;
        }
    }

    return $result;
}

// Example usage
$charArray = ["a", "a", "b", "b", "c", "c", "c"];
$compressedString = compress($charArray);

echo "Compressed String: $compressedString";
?>
