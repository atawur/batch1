<?php
include_once('./functions.php');
redirect_login();
require_once("./header.php");



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
           
        <?php if(isset($_SESSION['sucess_message'])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php 
                        echo $_SESSION['sucess_message'];
                        unset($_SESSION['sucess_message']);
                        ?>
                    </div>
                <?php } ?>
            
            <h2>This is dashboard</h2>
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