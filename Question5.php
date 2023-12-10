//Question 5 Implementation
<?php

function stutterWord($word)   //This function  takes a word as input and returns the stuttered version according to the specified pattern.
{
    $stutter = substr($word, 0, 2) . '…' . substr($word, 0, 2) . '…' . $word;

    return $stutter;
}

// Example usage
$originalWord = "incredible";
$stutteredWord = stutterWord($originalWord);

echo "Original Word: $originalWord\n";
echo "Stuttered Word: $stutteredWord";
?>
