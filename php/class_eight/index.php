<?php
  
//   $i=1;

//   while($i<=10){
//       if($i==5){
//           //break;
//           goto end;
//       }
//       echo "$i","<br>";
//       $i++;
//   }
//   end:
//     echo "loop is end";

  $n=0;
  a: echo "value of n is $n<br>";
  $n++;

  if($n<=10){
      goto a;
  }


?>