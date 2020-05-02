<?php


interface LightableInterface
{
    public function switchOn(bool $lumos): bool;

    public function switchOff(bool $lumos):bool;
}