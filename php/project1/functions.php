<?php
include_once('db/db.php');
function savePost($post){
      global $conn;
      extract($post);
      $sql = "insert into post(title,description,status) values ('$title','$description',$status)";
      mysqli_query($conn,$sql);
        
  }

?>