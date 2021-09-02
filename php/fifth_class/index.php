<?php
 $number = -3;

 if($number==1){
     echo 1;
 }else if($number==2){
     echo 2;
 }else if($number==21){
     echo 21;
 }
 else{
  echo "none of them";

 }
 echo "<br>";

 switch( $number){
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;   
        break; 
     case 21:
            echo 21;   
            break;     
    default:
        echo "none of them";
        break;    
 }
 echo "<br>";
 switch($number){
     case $number >1:
            if($number ==21){
                echo "yes"; 
            }else{
                echo "No";
            }
        //echo "value is getter than 1<br>";
        break;
    case $number < 1:
            switch($number){
                case -1:
                    echo -1;
                    break;
                case -2:
                    echo -2;
                    break;    
                default:
                    echo "none";   
                    break; 
            }
        //echo "value is less than 1<br>"; 
        break;
    default:
    echo "N/a<br>";
    break;       
 }

 echo "<br>";

 $name = "5kabir";


 switch($name){
     case (String) 5:
        echo "5";
        break;
     case (String) 'kabir':
        echo "You are kabir";
        break;
    case (String)'najim':
        echo "you are najim";
        break;
    default:
        echo "None of them" ;
        break;       
 }


 echo "<br>";
 $name1= "mohin";

 switch($name1){
    case "mohin":   
    case "m":
        echo "you are $name1";
        break;   
    default:
        echo "Non";
        break;    
 }
echo "<br>";

 $x="jasim";
 //$x=='mr z'
 if("mr z"== $x){
     echo "mr z";
 }else{
     echo "no";
 }
echo $x;
 

//1 . take a number and check the number odd or even
// 2. find the greater number between two number
//$x=12
//$y=14



