<?php

/**
 * SELASA
 * 29 SEPTEMBER 2020
 */


 include "data_siswa.php";

 // Filter array

$temp_arr=array();
$filter_city="";
$filter_lulus="";

foreach($data_siswa as $value){

    if($value[1]==$filter_city || $value[3]==$filter_lulus ){
        if($value[3]){
            $lulus="lulus";
        }else{
            $lulus = "belum lulus";
        }
        $temp_arr[]=[$value[0],$value[1],$lulus];
    }    
}
asort($temp_arr);
print_r($temp_arr);

// show data