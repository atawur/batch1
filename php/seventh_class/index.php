<?php
    //for
    //while
    // do while
    // foreach
   // 1->100
   //1
    // for($i=50;$i<=1000;$i++){
    //     echo $i."<br>";
    // }

    // for($i=50;$i>=1;$i--){
    //     echo $i."<br>";
    // }
    // for($i=1;$i<=100;$i+=5){
    //     echo $i."<br>";
    // }
    // $number = 100;
    // for($j=1;$j<=100;$j++){

    //     if($j%2==0){
    //         echo $j."<br>";
    //     }
    // }


    // $number = 100;
    // for($j=1;$j<=100;$j++){

    //     if($j%2!=0){
    //         continue;
    //     }

    //     echo  $j."<br>";
    // }

    // for ($k=1;$k<=10;$k++){
    //     if($k==3){
    //         continue;
    //     }

    //     echo $k."<br>";
    // }
    echo " WHILE LOOP<BR>";
    $b=11;
    while($b<=10){
        echo $b."<br>";
        $b++;
    }

    echo "DO WHILE LOOP<BR>";
    $x=11;
    do{
        echo $x;
        ECHO "<BR>";
        $x++;
    }while($x<=11);


    $name = array("Mr k","mr z","mr zoom");

    echo "<pre>";
    print_r($name);
    foreach($name as $key =>$value){

        echo "key=$key----",$value."<br>";

    }
    $person = array("age"=>23,"name"=>"mr k","hobby"=>"Football");
    echo "<pre>";
    print_r($person);
    foreach($person as $k =>$v){
        echo "$k= $v <br>";
    }
    //echo count($name)==3;
     for($i=0;$i< count($name) ;$i++){
         //0,1,2,3
        echo $name[$i],"<br>";

        //echo "koto","<br>";
     }

     $n=3;
     //1. Namota 
        2*1=2
        2*2=4
        2*3=6
     $number = 100
     //2. Print odd even both
     //3. 7 dara vivago
     
?>