<?php

$iceCream=[
    "Alena"=>"Black Cherry",
    "Treasure"=>"Chocolate",
    "Dave"=>"cookies and Cream",
    "Rialla"=>"Strowberry",
];

// print_r($iceCream);

echo PHP_EOL;

$data=[
    "name"=>"Nazriel Ilham",
    "age"=>34,
    "musician"=> true,
    "height"=>1.45,
    3=>"Angka satu",
    true=>"Benar"
];

// print_r($data);

// Function array

$task1=array(
   "title"=>"Clean Motorcycle",
   "priority"=>"Medium",
   "complete"=>true 
);

$task2=array(
    "title"=>"Watch Movie",
   "priority"=>"Medium",
   "complete"=>false  
);

$task3="All task was done"; // String

$todo=array($task1,$task2,$task3);

// echo $todo[0]["title"];

echo PHP_EOL;

// echo $todo[2];

$name=["nazriel ilham","Giring","Ari lasso"];

list($noah,$nidji,$dewa)=$name;

echo($noah);

$singer=[
    "dangdut"=>"Via vallen",
    "pop"=>"Ahmad Dani",
    "rock"=>"Ahmad Albar"
];

// Show the $data only index>2 

$count=0;

while((list($key,$value)=$name) && $count++ < 1){
    echo $key.PHP_EOL.$value;
}