<?php

namespace API;

use Controller\Calculation;

/** API Class to calculate distance between two points */
class DistanceCalculator
{
    /** @var Calculation */
    public $calculation;

    public function __construct(Calculation $calculation)
    {
        $this->calculation = $calculation;
    }

    public function calculateFinalDistance()
    {
        return $this->calculation->getDistance();
    }

}

/** ...initialization... */
include_once('../Controller/Calculation.php');
$data = new Data($validate);
$calculation = new Calculation($data);
$API = new DistanceCalculator($calculation);

echo $API->calculateFinalDistance();