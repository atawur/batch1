<?php
    $number = array(1,4,6,7,8);
    echo "<pre>";
    print_r($number);
   echo $number[0],"<br>";
   echo $number[2];


   $name = array('x','y',"Mukter","emdad","Manik");

   echo "<pre>";
   print_r($name);

   echo $name[2];

   $number2 = array(
       1=>3,
       3=>5
   );
   echo "<pre>";
   print_r( $number2);

   $person = array("age"=>32,'name'=>"Mr k","phone"=>"0111111");

   echo "<pre>";
   print_r($person);

   echo $person['age'];
?>