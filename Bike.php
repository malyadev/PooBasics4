<?php

class Bike extends Vehicule implements LightableInterface
{
    protected $currentSpeed = 15;

    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10){
            return true;
        }elseif ($this->currentSpeed <= 10){
            return false;
        }
    }

    public function switchOff(): bool
    {
        return false;
    }
}