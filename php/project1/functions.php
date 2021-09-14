<?php
include_once('db/db.php');
function savePost($post){
      global $conn;
      extract($post);
      $sql = "insert into post(title,description,status) values ('$title','$description',$status)";
      mysqli_query($conn,$sql);
        
  }

  function getAllPost(){
    global $conn;
    $sql = "SELECT post.*,status.status_name FROM `post` JOIN status ON post.status = status.id ";
    $result = mysqli_query($conn,$sql);
    return $result;
  }

  function getPostById($id){
    global $conn;
    $sql = "SELECT post.*,status.status_name FROM `post` JOIN status ON post.status = status.id  where post.id=$id";
    $result = mysqli_query($conn,$sql);
    return mysqli_fetch_assoc($result);
  }

  function getAllStatus(){
    global $conn;
    $sql = "SELECT * from status ";
    $result = mysqli_query($conn,$sql);
    return $result;
  }


?>