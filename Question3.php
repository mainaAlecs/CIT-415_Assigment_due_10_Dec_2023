<?php

class AnimalFarm
{
    private $chickens;
    private $cows;
    private $pigs;

    public function __construct($chickens, $cows, $pigs)
    {
        $this->chickens = $chickens;
        $this->cows = $cows;
        $this->pigs = $pigs;
    }

    public function calculateTotalLegs()
    {
        $chickenLegs = $this->chickens * 2;
        $cowLegs = $this->cows * 4;
        $pigLegs = $this->pigs * 4;

        $totalLegs = $chickenLegs + $cowLegs + $pigLegs;
        return $totalLegs;
    }
}

// Example usage
$animalFarm = new AnimalFarm(10, 5, 8); 

$totalLegs = $animalFarm->calculateTotalLegs();

echo "Total number of legs on the farm: " . $totalLegs;
?>
