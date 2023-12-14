<?php
include "Aircraft.php";
include "Destination.php";
include "Flight.php";

$aircraft = new Aircraft("Airbus", "A220-300", 120, 850);
$destination = new Airport("ARN", 59.6519, 17.9186);
$origin = new Airport("RIX", 56.121, 23.743);
$flight = new Flight("SA503", $origin, $destination, new DateTime, $aircraft);

echo "distance from departure point " .$flight->getDistance() . "<br>";
echo "Duration: " .$flight->getDuration() . "<br>";

echo "Landing time: ";
var_export($flight->getLandingDate());
