<?php 

namespace app\classes\animals;

class Chicken extends Animal{
    function __construct()
    {
        $this->idAnimal = parent::$id++;
        $this->product = "Яйца";
    }

    function getProduct()
    {
        return rand(0,1);
    }
}

