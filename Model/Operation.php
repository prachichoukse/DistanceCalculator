<?php

namespace Model;

class Operation
{
    /**
     * @param $firstPoint
     * @param $secondPoint
     * @return float
     */
    public function TotalDistance($firstPoint, $secondPoint)
    {
        return (float) $firstPoint + $secondPoint;
    }

}