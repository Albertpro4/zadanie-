<?php

namespace app\classes\animals;

class Cow extends Animal{


    function __construct(){
        $this->idAnimal = parent::$id++;
        $this->product = "Молоко";
    }

    function getProduct()
    {
        return rand(8,12);
    }
}

