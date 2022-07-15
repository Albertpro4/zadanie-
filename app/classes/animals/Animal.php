<?php 

namespace app\classes\animals;


class Animal{
    static $id  = 1; 
    public $idAnimal = 0;
    public $product;
    public function getProduct(){}
    public function getNameOfClass()

    {
        return static::class;
    }
}
