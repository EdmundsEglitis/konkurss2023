<?php
class Aircraft{

    public $developer;
    public $model;
    public $passengerCount;
    public $avgSpeed;

    function __construct($developer,$model,$passengerCount,$avgSpeed){
        $this->developer = $developer;
        $this->model = $model;
        $this->passengerCount = $passengerCount;
        $this->avgSpeed = $avgSpeed;
    }

}