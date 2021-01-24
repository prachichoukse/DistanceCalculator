<?php
/**
 * Purpose of class is calculate distance between two points & return total distsnace
 */

namespace Controller;

use Model\Data;
use Model\Conversion;
use Model\Operation;

class Calculation
{
    /** @var Data */
    public $data;

    /** @var Conversion */
    public $conversion;

    /** @var Operation */
    public $operation;

    public function __construct(Data $data, Conversion $conversion, Operation $operation)
    {
        $this->data = $data;
        $this->conversion = $conversion;
        $this->operation = $operation;
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

        /** Convert distance point in final result unit. */
        if ($this->data->getFirstPointUnit() != $this->data->getFinalDistanceUnit()) {

            if ($this->data->getFirstPointUnit() == 1) {
                $firstPoint = $this->conversion->convertYardsToMeter($this->data->getFirstPoint());
            }
            if ($this->data->getFirstPointUnit() == 0) {
                $firstPoint = $this->conversion->convertMeterToYards($this->data->getFirstPoint());
            }
        }

        if ($this->data->getSecondPointUnit() != $this->data->getFinalDistanceUnit()) {
            if ($this->data->getSecondPointUnit() == 1) {
                $secondPoint = $this->conversion->convertYardsToMeter($this->data->getSecondPoint());
            }
            if ($this->data->getSecondPointUnit() == 0) {
                $secondPoint = $this->conversion->convertMeterToYards($this->data->getSecondPoint());
            }

        }

        return $this->operation->TotalDistance($firstPoint, $secondPoint);
    }
}
