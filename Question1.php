//Question 1 Implementation
//Calculate the difference between two dates using PHP OOP approach. Sample Dates : 1981-11-03, 2013-09-04
<?php

class DateDifferenceCalculator    //Class that takes two dates as parameters during instantiation
{
    private $startDate;
    private $endDate;

    public function __construct($startDate, $endDate)
    {
        $this->startDate = new DateTime($startDate);
        $this->endDate = new DateTime($endDate);
    }

    public function getDifference() // Method calculates the difference between the two dates using the diff method of the DateTime class
    {
        $interval = $this->startDate->diff($this->endDate);
        return $interval;
    }
}

// Sample Dates from the Question
$startDate = '1981-11-03';
$endDate = '2013-09-04';

// Create an instance of the DateDifferenceCalculator class
$dateCalculator = new DateDifferenceCalculator($startDate, $endDate);

// Get the difference between the dates
$difference = $dateCalculator->getDifference();

// Display the difference as the output
echo "Difference: " . $difference->y . " years, " . $difference->m . " months, " . $difference->d . " days";
