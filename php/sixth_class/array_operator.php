<?php
// array uinion
  $name = array(5=>"karim",1=>"Mr s",2=>"mr z");
  $name2 = array(0=>"karim 2",1=>"Mr s2",2=>"mr z2",3=>"mr talukdar");
  $union = $name + $name2 ;
  echo "<pre>";
  print_r($union);
  var_dump($name2==$name);

// array equity
$array1 = array(1=>1,2=>2,3=>3,0=>0);
$arra2 = array(2=>2,3=>3,0=>0,1=>1);
var_dump($array1 == $arra2);
//non equity
var_dump($array1 <> $arra2);

echo "---------identity-------<br>";
/*
 have the same number of element
 key value pair
 sequence
 data type exception for integer value
*/
$array3 = array('1'=>1,2=>2,3=>3,0=>0);
$arra4 = array(1=>1,2=>2,3=>3,0=>0);
var_dump($array3 === $arra4);
echo "---------not identity-------<br>";
var_dump($array3 !== $arra4)


?>