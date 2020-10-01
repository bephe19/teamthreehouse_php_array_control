<?php 

$data=["Ariel","Giring","Noah"]; // Array -> String

$musisi=implode("\n", $data);

echo $musisi;

$musisi_arr=explode("\n", $musisi); // String -> Array

print_r($musisi_arr);

array_push($data,"Gesang");

print_r($data);

array_unshift($data,"Rossa");

print_r($data);

// Remove Elemen

array_pop($data); // Remove element from end

array_shift($data); // remove element from begining

unset($data[0]); // remove element array index [0]

print_r(array_values($data)); // return all array

$data_baru=["Via Vallen"];

$new=array_merge($data,$data_baru);

print_r($new);

echo PHP_EOL;

// Quiz from teamtree House

$colors=array("Red","Green","Blue",);

// add modification below this line

array_unshift($colors,"Yellow"); // Add Yellow to begining array

array_push($colors,"Black"); // Ad Black to the end of Array

array_splice($colors,1,1,"Magenta"); // Replace element from green

unset($colors[2]);

print_r($colors);

$input = array("Red","green","blue","yellow");

array_splice($input1,4, "orange");

var_dump($input);

echo PHP_EOL;

$learn = array("conditionals","Arrays","Loops");

$learn[]="build something awesome";

array_push($learn,"Functions","forms","object");

array_unshift($learn,"HTML","CSS");

echo"you removed".array_shift($learn);

echo"you removed".array_pop($learn);

unset($learn[1],$learn[2]);

$learn=array_value($learn);

?>