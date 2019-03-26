<?php

namespace App;


class Passenger extends Auto
{
    private $equipment;

    public function setEquipment($equipment)
    {
        $this->equipment = $equipment;
    }

    public function getEquipment()
    {
        return $this->equipment;
    }
}