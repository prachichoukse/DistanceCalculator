<?php
/**
 * Purpose of class is calculate distance between two points & return total distsnace
 */

namespace Controller;

use Model\Data;

class Calculation
{
    /** @var Data */
    public $data;

    public function __construct(Data $data)
    {
        $this->data = $data;
    }

    /**
     * @return float|int|string
     */
    public function getDistance()
    {
        /** check for validation messages */
        if (!is_numeric($this->data->getFirstPoint())) {
            return $this->data->getFirstPoint();
        }

        if (!is_numeric($this->data->getSecondPoint())) {
            return $this->data->getSecondPoint();
        }

        if (!is_numeric($this->data->getFirstPointUnit())) {
            return $this->data->getFirstPointUnit();
        }

        if (!is_numeric($this->data->getSecondPointUnit())) {
            return $this->data->getSecondPointUnit();
        }

        if (!is_numeric($this->data->getFinalDistanceUnit())) {
            return $this->data->getFinalDistanceUnit();
        }

        $firstPoint = $this->data->getFirstPoint();
        $secondPoint = $this->data->getSecondPoint();

    }
}