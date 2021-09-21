<?php
//include_once('./header.php');
//include_once('./header.php');

require_once("./header.php");
include_once('./functions.php');
//$hobby = getAllHobbies();
$hobbies = getMasterData('hobby');


if (isset($_POST['register'])) {
    $error = array();
    extract($_POST);

    $isexist = checkEmail($email);

    $submit = true;
    if ($isexist) {
        $error[] = "User with this email $email already exist";
        $submit = false;
    }

    if ($submit) {
        $userid = saveUser($_POST);
    }
}
?>
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
            <h3>Registration Form</h3>

            <?php if (isset($error) && count($error) > 0) { ?>
                <?php foreach ($error as $key => $v) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $v; ?>
                    </div>
                <?php } ?>
            <?php } ?>
            <?php if (isset($userid) && $userid > 0) { ?>
                <div class="alert alert-success" role="alert">
                    Registration sucess
                </div>
            <?php } ?>
            <form action="signup.php" method="post">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name='full_name'>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" name="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" name='password'>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" name='confirm_password'>
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Female">
                            <label class="form-check-label" for="gridRadios2">
                                Female
                            </label>
                        </div>

                    </div>
                </fieldset>

                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Hobby</legend>
                    <div class="col-sm-10">



                        <?php while ($row = mysqli_fetch_assoc($hobbies)) { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1" name="hobby[]" value="<?php echo $row['id']; ?>">
                                <label class="form-check-label" for="gridCheck1">
                                    <?php echo $row['hobby_name']; ?>
                                </label>
                            </div>
                        <?php } ?>


                    </div>
                </fieldset>

                <button type="submit" name='register' class="btn btn-primary">Register</button>
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