<?php
//declare(strict_type=1);
 function print_number($number){
     echo $number."<br>";
     if($number<100){
        print_number($number+1)  ;
     }
 }

print_number(10);


sum_value(1,2,3,678,454,4545,4545,4545,45454,45454,333,444,10,1111);

function sum_value(...$n){
    echo "<pre>";
    print_r($n);
}

/*
1.10
        function is_prime($number){
            echo 'yes'

            echo "No";
        }
        is_prime(10)

        3

        5
        9=>1 r 9

2. function prit_numebr($start,$end) {


}  

prit_numebr(1,100)
prit_numebr(100,1)//invalid


3. print_odd_number($stat,$end){


}
print_odd_number(100,1000)

print_odd_number(100,1)//invalid

*/
?>


<?php 
function print_odd($start,$end){
  if($start > $end){
    echo "Invalid Number";
  }else{
    for($i =$start; $i<$end;$i++){
      if($i%2 != 0){
        echo $i." This is Odd Number<br>";
      }else{
        continue;
      }
  }

  }
}
print_odd(200,100);


?>
<?php
echo "<br>";
function isPrime($number){
    if($number > 1){
        for ($i=2;$i<$number;$i++){
            if($number%$i==0){
                return "$number is not prime";
                //break;
            }
        
        }
        return "$number is  prime";
    }else{
        return "invalid";
    }
    
}

echo isPrime(9);

// echo "<br>";
// function prime_number($start,$end){
//     for($i =$start; $i<$end;$i++){
//       if($i%2 != 0){
//         echo $i." This This is Prime Number<br>";
//       }else{
//         continue;
//       }
//   }
//   }
//   prime_number(1,2);
  
?>
