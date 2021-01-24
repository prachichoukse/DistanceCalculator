<?php

namespace API;

use Controller\Calculation;
use Model\Conversion;
use Model\Data;
use Model\Operation;
use Model\Validate;

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
include_once('../Model/Data.php');
include_once('../Model/Validate.php');
include_once('../Model/Conversion.php');
include_once('../Model/Operation.php');
$validate = new Validate();
$conversion = new Conversion();
$operation = new Operation();
$data = new Data($validate);
$validation = new Calculation($data, $conversion,$operation);
$API = new DistanceCalculator($validation);

header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$response = array();
if (is_numeric($API->calculateFinalDistance())) {
    $response['final_distance'] = $API->calculateFinalDistance();
}else{
    $response['error'] = $API->calculateFinalDistance();
}
echo json_encode($response);