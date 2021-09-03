<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


$p1_f_name = "x";
$p1_l_name ="karim ";


$p2_f_name = "y";
$p2_l_name ="jun ";


$p3_f_name = "z";
$p3_l_name ="muntasir ";

$first_name= "md";
$m_name = "rahman";
$last_name = "atik";

function get_full_name($f_name,$l_name){
    echo "$f_name $l_name<br>";
}

//get_full_name($p1_f_name ,$p1_l_name);
//get_full_name($p2_f_name ,$p2_f_name);
//get_full_name($p3_f_name ,$p2_l_name);


/*
    120
    130


    n1=123
    n2=123
    n3=121


    (n1+n2+n3)/3

    n4=120
    n5=120
    n6=123
(n4+n5+n6)/3


    130
    139
    124
(n1+n2+n3)/3


*/




function multiply(int $n1,int $n2):float{
    return $n1*$n2;
}


//$output= multiply('x','z');

//echo $output;
echo multiply(123,123),"<br>";
//multiply(120,120);


// function get_average($n1,$n2,$n3){
//     echo ($n1+$n2+$n3)/3,"<br>";
// }

// get_average(123,123,121);
// get_average(124,125,12444);
// get_average(123,123,121);


// function calculate($n1,$n2,$method='add'){
//     if($method=='add'){
//         echo $n1+$n2,"<br>";
//     }
//     if($method=='sub'){
//         echo $n1-$n2,"<br>";
//     }
//     if($method=='multi'){
//         echo $n1*$n2,"<br>";
//     }
//     if($method=='div'){
//         echo $n1/$n2,"<br>";
//     }
// }



// calculate(1,123);
// calculate(1,123,'multi');
// calculate(1,123,'sub');
// calculate(1,123,'div');

// date_default_timezone_set('Asia/Dhaka');
// echo date('Y-m-d H:i:s'),"<br>";


// echo strlen('atik'),"<br>";


// $person = array("name"=>"atik","age"=>34);

// echo "<pre>";


// $number = array(23,1,4,8);
// asort($person);
//  print_r($person);


//  $name = " atik ";

//  echo rtrim($name)."kkk<br>";


//  "123456";

//  echo md5("123456");


//  $name = "cox'z baxzar world";

//  echo str_replace("world","hello",$name);

 
echo "<br>ffff";


function get_sum(...$number){
    return array_sum($number);

}
echo get_sum(10,2,3,45,234,44,33,333),"<br>";


function add_five(&$value){
     $value +=5;
}

$num = 2;

add_five($num);

echo $num;





