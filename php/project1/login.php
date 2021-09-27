<?php
//include_once('./header.php');
//include_once('./header.php');

require_once("./header.php");
include_once('./functions.php');
redirect_dashboard();
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    login($email,$password);
}

?>
<style>
    .error{
        color:red !important;
    }
</style>    
<div class="main">

    <div class="banner-section">
        <div class="banner">
            <div class="banner_inner_section">
                <h1>We Follow Fashion Trends</h1>
                <h3>For whom, who are in extremely love with eco friendly system.</h3>
                <input class='view_details' type="button" name="view" value="VIEW POST DETAILS" />
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content" style="border: 1px solid #ccc;padding:50px 10px 10px 10px;">
            <h3>Login Form</h3>

          
                <?php if(isset($_SESSION['login_error_message'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php 
                        
                            echo $_SESSION['login_error_message'];
                            unset($_SESSION['login_error_message']);
                        
                        ?>
                    </div>
                <?php } ?>
            
            <form action="login.php" method="post">
                
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>" name="email">
                        <div class="error">
                            <?php 
                            if(isset($email_error)){
                                echo $email_error;
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" name='password'>
                        <div class="error">
                            <?php 
                            if(isset($password_error)){
                                echo $password_error;
                            }
                            ?>
                        </div>
                    </div>
                </div>
                

                <button type="submit" name='login' class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="sidebar">
            <?php
            require_once("sidebar.php")
            ?>
        </div>
    </div>
</div>
<?php
include_once('./footer.php')
?>
</body>

</html>