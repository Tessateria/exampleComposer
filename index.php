<?php

require_once ('vendor/autoload.php');

use App\Catalog;
use App\Passenger;
use App\Truck;

$familyCar = new Passenger();
$familyCar->setMark('Opel');
$familyCar->setYear('2013');
$familyCar->setModel('Zafira');
$familyCar->setVinCode('jbn-123');
$familyCar->setEquipment('7_seats');

$longLorry = new Truck();
$longLorry->setMark('Mercedes');
$longLorry->setYear('2015');
$longLorry->setModel('Atego');
$longLorry->setVinCode('hdfgh-123/45');
$longLorry->setCargoWeight('12 ton');

$catalog = new Catalog();
$catalog->setCar($familyCar);
$catalog->setCar($longLorry);
$catalog->getCars();