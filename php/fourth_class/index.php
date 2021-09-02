<?php
$number = (int)'10';
var_dump($number);
if($number === 10){
    echo "this is 10";
}else{
    echo "this is  not ten";
}

$seconNumber = 100;
echo "<br>";
if($seconNumber < 100){
    echo "the value is less than 100";
}else if($seconNumber > 100){
    echo "the value is getter than 100";
}else{
    echo "value is equal";
}


echo "<br>";

$name = "Y";

if($name=='Mr x'){
    echo "your are mr x";
}else if($name =='y'){
    echo "your are mr y";
}else if($name=='z'){
    echo "your are mr z";
}else if($name=="a"){
    echo "you are mr a";
}else{
   echo "none of the above";
}
echo "<br>";
//logical operator

$money = 14;
// and ,&&                       
if($money < 100 && $money > 0){
    echo "the $money is lies between 0 and 100";
}else{
    echo "N/A";
}

echo "<br>";
//or , ||
if($money < 100 || $money < 0 or $money > 1000){
    echo "here i am";
}else{
    echo "N/A";
}
echo "<br>";
        
  if($money > 100 xor $money < 10 ){
      echo "here";
  }else{
      echo "Not true";
  }
 ///

 $x=90;
echo '<br>';
$y = 90;
 if($x !==$y){
     echo "hi";
 }else{
     echo "no";
 }
?>