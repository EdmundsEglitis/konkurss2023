<?php
class Airport{

    public $iataCode;
    public $latitude;
    public $longitude;

    function __construct($iataCode, $latitude, $longitude){
        $this->iataCode = $iataCode;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
}