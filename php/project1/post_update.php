<?php

session_start();
include ('functions.php');
if(isset($_GET['id'])){
    $id = base64_decode($_GET['id']);
    //echo $id ;
    if(isset($_POST)){

        update_post($_POST,$id);
        $_SESSION['message'] = "Successfuly Updated";
        header("Location:all_post.php");
    }
    
    
}
 

?>