<?php

    if(session_status()== PHP_SESSION_NONE){
        session_start();
    }
  
?>
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

  // function getAllStatus(){
  //   global $conn;
  //   $sql = "SELECT * from status ";
  //   $result = mysqli_query($conn,$sql);
  //   return $result;
  // }


  function update_post($data,$id){
    extract($data);
    global $conn;
    $sql = "UPDATE post SET title= \"$title\",description= \"$description\" , status='$status' WHERE id=$id";

    //echo $sql;
    //exit();

    $result = mysqli_query($conn,$sql);
    return $result;
  }

  // function getAllHobbies(){
  //   global $conn;
  //   $sql = "SELECT * from hobby";
  //   $result = mysqli_query($conn,$sql );
  //   return $result;
  // }

  function getMasterData($table_name){
    global $conn;
    $sql = "SELECT * from $table_name";
    $result = mysqli_query($conn,$sql );
    return $result;
  }

function saveUser($userInfo){
  //$full_name = $userInfo['full_name'];

  extract($userInfo);

  global $conn;
  $md5Password =  md5($password);
  $full_name = getData($full_name);
  

  $sql = "INSERT INTO user(full_name,email,password,gender) values ('$full_name','$email','$md5Password','$gender')";
  $rs = mysqli_query($conn,$sql);
  $user_id  = mysqli_insert_id($conn);

  if($rs && $user_id){
     foreach($hobby as $key=>$value){
        $sql = "Insert into user_hobby(user_id,hobby_id) values($user_id,$value)";
        mysqli_query($conn,$sql );
     }
  }

  return $user_id ;
 
}

  function checkEmail($email){
      global $conn;
      $sql = "SELECT * FROM `user` WHERE email = '$email'"; 
      $rs = mysqli_query($conn,$sql);
      $user = mysqli_fetch_assoc($rs );
      if($user){
        return true;
      }
       return false;

  }

  function getData($data){
    global $conn;
    $trim_data = trim($data);
    $stripslashes = stripslashes($trim_data);
    $htmlspecial = htmlspecialchars($stripslashes);
    $final_data = mysqli_real_escape_string($conn,$htmlspecial);
    return $final_data;
  }

  function login($email,$password){
    $md5_password = md5($password);
    global $conn;
    $sql = "SELECT * FROM `user` WHERE   email = '$email' AND password='$md5_password'";
    $rs = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($rs );
    if($user){
      $_SESSION['userinfo'] = $user ;
      $_SESSION['sucess_message'] = "Sucessfully login" ;
      header("Location:dashboard.php");
    }else{
      $_SESSION['login_error_message'] = "Invalid user name or password" ; 
    }
  }

  function redirect_login(){
    if(!isset($_SESSION['userinfo'])){
      header("Location:login.php");
    }
  }

  function redirect_dashboard(){
    if(isset($_SESSION['userinfo'])){
      header("Location:dashboard.php");
    }
  }
?>