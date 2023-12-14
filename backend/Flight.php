<?php
class Flight{

    public $flightCode;
    public $origin;
    public $destination;
    public $departureTime;
    public $aircraft;

    function __construct($flightCode, $origin, $destination, $departureTime, $aircraft){
        $this->flightCode = $flightCode;
        $this->origin = $origin;
        $this->destination = $destination;
        $this->departureTime = $departureTime;
        $this->aircraft = $aircraft;
    }

    public function getDistance(){
        $delta_lat = $this->origin->latitude - $this->destination->latitude ;

        $delta_lon = $this->origin->longitude - $this->destination->longitude ;

    $earth_radius = 6372;

    $alpha = $delta_lat/2;
    $beta = $delta_lon/2;

        $calc1 = sin(deg2rad($alpha)) * sin(deg2rad($alpha)) + cos(deg2rad($this->destination->latitude)) * cos(deg2rad($this->origin->latitude)) * sin(deg2rad($beta)) * sin(deg2rad($beta)) ;
        $calc2 = asin(min(1, sqrt($calc1)));

    $distance = 2*$earth_radius * $calc2;
    $distance = round($distance, 4);


        return $distance;
    }
    public function getDuration(){
        {
            if ($this->aircraft->avgSpeed > 0) {
                return round( (($this->getDistance() / $this->aircraft->avgSpeed) * 60) + 30);
            } 
        }
    }

    public function getLandingDate(){


            $timezones = json_decode(file_get_contents("https://tu.proti.lv/timezones/?latitude=" .$this->destination->latitude ."&longitude=" .$this->destination->longitude),true)["timezones"][0];

       $departureDate = new DateTime('now');

            $departureDate->add(new DateInterval('PT' . $this->getDuration() . 'M'));

       $destinationTimeZone = new DateTimeZone($timezones);
       
            $departureDate->setTimezone($destinationTimeZone);

            
       return $departureDate;

    }

}
