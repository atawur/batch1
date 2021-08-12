<?php
/*
String
Integer
Float/decimal/double
Boolean
Array
NUll
Object
Resource
*/
    $name = "Mr X" ;
    $age = '24'; 
    $new_age = 24; 
    $isYou = false;

    $flaot = "34.0";
    // String
    var_dump($name);
    echo "<br>";
    // String
    var_dump($age);
    echo "<br>";
    //Integer
    var_dump($new_age);
    echo "<br>";
  
    // Boolean
    var_dump( $isYou );
    echo "<br>";
    //Array
    $hobby = array("football","Cricket",23);
    var_dump($hobby);
    echo "<br>";
    // NUll
    $firstNumber=null;
    var_dump($firstNumber);
    echo "<br>";
    //Object
    class Person
    {
        public $name;
        public $age;
        
    }
    
  
    $p1=  new Person();
     var_dump($p1);
     echo "<br>";
        $file = fopen("name.txt","w");

        var_dump($file);

   

?>