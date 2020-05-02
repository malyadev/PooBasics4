<?php

class Bike extends Vehicule 
{
    protected $currentSpeed = 10;

    public function homer(LightableInterface $vehicule)
    {
        if ($this->currentSpeed > 10){
            $vehicule->switchOn(true);
        }elseif ($this->currentSpeed < 10){
            return false;
        }

        $vehicule->switchOff(false);
    }
}