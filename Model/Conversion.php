<?php

namespace Model;

/** Purpose of class is to convert distance units */
class Conversion
{
    const ONE_YARDS = 1.09361;
    const ONE_METER = 0.9144;

    /**
     * @param $distance
     * @return float|int
     */
   public function convertMeterToYards($distance)
    {
       $distance = $distance * self::ONE_YARDS;
       return $distance;
    }

    /**
     * @param $distance
     * @return float|int
     */
   public function convertYardsToMeter($distance)
    {
        $distance = $distance * self::ONE_METER;
        return $distance;
    }

}