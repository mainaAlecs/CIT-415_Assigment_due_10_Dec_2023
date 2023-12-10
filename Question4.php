<?php

class PieSplitter
{
    private $totalSlices;
    private $numRecipients;
    private $slicesPerPerson;

    public function __construct($totalSlices, $numRecipients, $slicesPerPerson)
    {
        $this->totalSlices = $totalSlices;
        $this->numRecipients = $numRecipients;
        $this->slicesPerPerson = $slicesPerPerson;
    }

    public function isFairSplit()
    {
        $totalDesiredSlices = $this->numRecipients * $this->slicesPerPerson;

        return $totalDesiredSlices <= $this->totalSlices && $totalDesiredSlices % $this->numRecipients === 0;
    }
}

// Example usage
$pieSplitter = new PieSplitter(8, 4, 2);

if ($pieSplitter->isFairSplit()) {
    echo "The pie can be split fairly!";
} else {
    echo "The pie cannot be split fairly.";
}
?>
