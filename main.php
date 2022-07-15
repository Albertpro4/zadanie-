<?php

   // Для начала необходимо, создать общий класс животных, от которого будут взаимствовать другие животные

require_once 'app\services\autoload.php';

use  app\classes\animals\Animal;
use  app\classes\animals\Chicken;
use  app\classes\animals\Cow;
use  app\classes\Farm;

$animals= [
    Cow => 10,
    Chicken => 20,
];

$data = new Farm();

$data->addAnimal(new Chicken);
for ($i = 0; $i < 20; $i++) { 
    $data->getAnimal(new Chicken);
}


$data->addAnimal(new Cow);
for ($i = 0; $i < 10; $i++) { 
    $data->getAnimal(new Cow) ;
}

$data->countAnimals();

$data->getProductOnWeek();

for ($i = 0; $i < 5; $i++){ 
    $data->getAnimal(new Chicken);
}

for ($i = 0; $i < 1; $i++){ 
  $data->getAnimal(new Cow);
}

$data->countAnimals();

$data->getProductOnWeek();