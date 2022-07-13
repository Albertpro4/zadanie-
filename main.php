<?php

   // Для начала необходимо, создать общий класс животных, от которого будут взаимствовать другие животные

class Animal{

    static $id  = 1; 

    public $idAnimal = 0;

    public $product;

    public function GetFromProduct(){}

    public function getNameOfClass()

    {
        return static::class;
    }
}


class Chicken extends Animal{
    function __construct()
    {
        $this->idAnimal = parent::$id++;
        $this->product = "Яйца";
    }

    function GetFromProduct()
    {
        return rand(0,1);
    }
}



class Cow extends Animal{


    function __construct(){
        $this->idAnimal = parent::$id++;
        $this->product = "Молоко";
    }

    function GetFromProduct()
    {
        return rand(8,12);
    }
}


// Необходимо создать класс ферму, как написано в задании и внести данные


class Farm{

    private $an = array();


    private $result;

    public function AddingAnimal($animal){
        array_push($this->an[$animal->getNameOfClass()], $animal);
    }
   
    public function CountAnimals(){
        echo "Количество животных " . '</br>';
        foreach ($this->an as $animal => $value) {
            echo "$animal: " . count($value) . '</br>';
        }
    }

    


    public function GetsomeProductionOnWeekly(){

        for ($i=0; $i < 7; $i++) { 
            $this->GetsomeProductionOnDaily();
        }

        echo " Продукция за неделю " . '</br>' ;
      
        foreach ($this->result as $prodaction => $all) {
            echo  $prodaction . ": " . $all ;
        }
       
    }
  
    public function AddAnimal($animal){
        $this->an[$animal->getNameOfClass()] = array();
    }
    public function GetsomeProductionOnDaily(){

      
        foreach ($this->an as $Animal => $value) {
        
            $form = $value[0]->product;



            $sum = 0;


         
            $this->result[$form] = $sum;

          
            foreach ($value as $animal) {


                $sum += $animal->GetFromProduct();


            }


            $this->result[$form] += $sum;
        }

    }
}





$data = new Farm();

$data->AddAnimal(new Chicken);
for ($i = 0; $i < 20; $i++) { 
    $data->AddingAnimal(new Chicken);
}


$data->AddAnimal(new Cow);
for ($i = 0; $i < 10; $i++) { 
    $data->AddingAnimal(new Cow) ;
}


$data->CountAnimals();

$data->GetsomeProductionOnWeekly();


for ($i = 0; $i < 5; $i++){ 
    $data->AddingAnimal(new Chicken);
}

for ($i = 0; $i < 1; $i++){ 
  $data->AddingAnimal(new Cow);
}


$data->CountAnimals();

$data->GetsomeProductionOnWeekly();