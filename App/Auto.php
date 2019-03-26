<?php

namespace App;

abstract class Auto
{
    private $mark;
    private $year;
    private $model;
    private $vin_code;

    public function setMark ($mark)
    {
        $this->mark = $mark;
    }

    public function getMark()
    {
        return $this->mark;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setVinCode($vin_code)
    {
        $this->vin_code = $vin_code;
    }

    public function getVinCode()
    {
        return $this->vin_code;
    }
}