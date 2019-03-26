<?php

namespace App;

class Catalog
{
    private $cars = [];

    public function setCar (Auto $car)
    {
        $this->cars[] = $car;
    }

    public function getCars()
    {
        foreach ($this->cars as $car){
            echo $car->getMark() . ' ' .
                 $car->getYear() . ' ' .
                 $car->getModel() . ' ' .
                 $car->getVinCode() . ' ' . PHP_EOL;
        }
    }
}