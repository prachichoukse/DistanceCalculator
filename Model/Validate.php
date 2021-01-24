<?php

namespace Model;

class Validate
{
    /**
     * @param $distancePoint
     * @return string
     */
    public function validateDistancePoint($distancePoint)
    {
        if ((Is_null($distancePoint)) || !(is_numeric($distancePoint))) {
            return "Please enter a valid number";
        }

        if ($distancePoint < 0) {
            return "Please do not add negative values";
        }
    }

    /**
     * @param $distanceUnit
     * @return string|int
     */
    public function validateUnits($distanceUnit)
    {
        if (($distanceUnit == 0) || ($distanceUnit == 1)) {
            return $distanceUnit;
        }

        return "Please enter correct unit, either 0 for meter or 1 for yards.";
    }
}