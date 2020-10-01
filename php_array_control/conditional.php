<?php 

$score=49;

if($score>=60)
{
    echo "you past the test";  // jika 

}elseif($score>=50 && $score<60)
{
    echo"Try Again";
}else
{
    echo "You fail the test";
}

echo PHP_EOL;

$score=75;

function gradeArray($score) {
 if ($score > 95 && $score=100)
{

    return "A";

}elseif ($score > 75 && $score =95){
    
    return "B";

}elseif ($score > 65 && $score =75){
    
    return "C";

}else {               
    
    return "D";
}
}

echo gradeArray($score);

echo PHP_EOL;

//Compare
// @link https://www.php.net/manual/en/language.op

//compare

var_dump((1<>2)); //true
var_dump((1!=2)); //true

// identical

var_dump((1==="1")); // false

//not identical

var_dump((1!==1)); // false

$num=10000;

if($num>=10 && $num <=1000)
{
    if($num<=1000)
    {
        echo "Your Number is in range";
    }else
    {
        echo "Your number is greater then 1000";
    }
}else 
{
    echo "your number is NOT in range";
}   

var_dump(($number=true) || (false && true));

b();



switch(date('l'))
{
    case "Monday";
        echo "Starting Day";
        break;
    case "Tuesday";
        echo "Wash a Car";
        break;  
    case "Wednesday";
        echo "Holiday";
        break; 
    case "Thursday";
        echo "Vacation";
        break;
    default:
        echo "Long Holiday";
}




?>

