//Question 2
//Write a PHP program to find majority element in an array.
<?php

function findMajorityElement($arr)   //This function takes an array as input and uses the Boyer-Moore Voting Algorithm to find the majority element
{
    $n = count($arr);

    // Step 1: Find a candidate for majority
    $candidate = $arr[0];
    $count = 1;

    for ($i = 1; $i < $n; $i++) {
        if ($arr[$i] === $candidate) {
            $count++;
        } else {
            $count--;
        }

        if ($count == 0) {
            $candidate = $arr[$i];
            $count = 1;
        }
    }

    // Step 2: Verify if the candidate is a majority element
    $count = 0;
    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] === $candidate) {
            $count++;
        }
    }

    if ($count > $n / 2) {
        return $candidate;
    } else {
        return "No majority element";
    }
}

// Example usage
// This section demonstrates how to use the function with a sample array.
$arr = [3, 3, 4, 2, 4, 4, 2, 4, 4];
$result = findMajorityElement($arr);

echo "Majority Element: " . $result;
?>
