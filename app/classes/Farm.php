<?php

namespace app\classes;

class Farm{

    private $an = array();

    private $result;

    public function getAnimal($animal){
        array_push($this->an[$animal->getNameOfClass()], $animal);
    }
   
    public function countAnimals(){
        echo "Количество животных " . '</br>';
        foreach ($this->an as $animal => $value) {
            echo "$animal: " . count($value) . '</br>';
        }
    }

    public function getProductOnWeek(){

        for ($i=0; $i < 7; $i++) { 
            $this->getProductOnDay();
        }

        echo " Продукция за неделю " . '</br>' ;
      
        foreach ($this->result as $prodaction => $all) {
            echo  $prodaction . ": " . $all ;
        }
       
    }
  
    public function addAnimal($animal){
        $this->an[$animal->getNameOfClass()] = array();
    }
    public function getProductOnDay(){
      
        foreach ($this->an as $Animal => $value) {
        
            $form = $value[0]->product;

            $sum = 0;

            $this->result[$form] = $sum;

            foreach ($value as $animal) {

                $sum += $animal->getProduct();


            }

            $this->result[$form] += $sum;
        }

    }
}

