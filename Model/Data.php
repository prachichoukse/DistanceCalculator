<?php

namespace Model;

/** The purpose of class is to read User Inputs for Distance calculation. */
class Data
{
    /** @var Validate */
    public $validate;

    public function __construct(Validate $validate)
    {
        $this->validate = $validate;
    }

    /**
     * @return float|string
     */
    public function getFirstPoint()
    {
        if (!isset($_POST['first_point'])) {
            return "First point distance is not set";
        }
    
        return (float)$firstPoint = $_POST['first_point'];
    }

    /**
     * @return float|string
     */
    public function getSecondPoint()
    {
        if (!isset($_POST['second_point'])) {
            return "Second point distance is not set";
        }

        return (float)$firstPoint = $_POST['second_point'];
    }

    /**
     * @return int|string
     */
    public function getFirstPointUnit()
    {
        if (!isset($_POST['first_point_unit'])) {
            return "First Point unit is not set";
        }

        return (int)$firstPointUnit = $_POST['first_point_unit'];
    }

    /**
     * @return int|string
     */
    public function getSecondPointUnit()
    {
        if (!isset($_POST['second_point_unit'])) {
            return "Second Point unit is not set";
        }

        return (int)$firstPointUnit = $_POST['second_point_unit'];
    }

    /**
     * @return int|string
     */
    public function getFinalDistanceUnit()
    {
        if (!isset($_POST['final_distance_unit'])) {
            return "final distance unit is not set";
        }

        return (int)$firstPointUnit = $_POST['final_distance_unit'];
    }
}