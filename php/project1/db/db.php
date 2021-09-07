<?php
   $host = "localhost";
   $user_name = "root";
   $password = '';
   $db_name = "test_db";

   $conn = mysqli_connect( $host,$user_name ,$password ,$db_name );
    if($conn){
        return true;
        //echo "connected";
    }else{
        echo "Not connected";
        die();
    }
?>