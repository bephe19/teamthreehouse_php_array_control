<?php

$number=array(
    57=>"on time to study",
    2=>"is numeric",
    18=>"is the avarage",
    10=>"per csn of the world",
    11=>"empire state",
    98=>"% of the atom",
    69=>"is the large number"

);

for($i=1;$i<=100;$i++){
    if(isset($number[$i])){
        echo $i.$number[$i];
    }else{
        echo $i. "\n";
    }
}