<?php

    if(session_status()== PHP_SESSION_NONE){
        session_start();
    }
  
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./css/style.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
        <header>
            <div class="social_part">
                <div class="scioal_section">
                    <div class="icon_section" >
                        <i class="fab fa-facebook-f icon_margin"></i>
                        <i class="fab fa-twitter icon_margin"></i>
                    
                    </div>
                    <div class="mobile_number">+0000000000000</div>
                    <div class="email">example.com</div>
                </div>
            </div>
                <div class="nav_section">
                    <div class="nav_main">
                        <div class="logo">
                            <img src="images/logo.png" />
                         </div>
                        <nav id="nav">
                                <ul>
                                    <li><a href="index.php" >Home</a></li>
                                    <li><a href="post.php" >Create Post</a></li>
        
                                    <li><a href="all_post.php">All Post</a></li>
                                    <!-- <li>
                                        <a href="#">Category</a>
                                        <ul>
                                            <li><a href="#">Electronics</a>
                                                <ul>
                                                    <li><a href="#">Mobile</a></li>
                                                    <li><a href="#">Laptop</a></li>
                                                    <li><a href="#">Mouse</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Kitchen</a></li>
                                        </ul>
                                    </li> -->
                                    <?php if(isset($_SESSION['userinfo'])) {?>
                                        <li><a href="logout.php" class="logout" target="_blank">Logout</a></li>
                                        
                                    <?php }else{ ?>
                                        <li><a href="signup.php" class="signup" target="_blank">Signup</a></li>
                                        <li><a href="login.php" class="signup" target="_blank">Login</a></li>   
                                    <?php } ?>    
                                </ul>
                        </nav>
                    </div>
                    
                </div>
            
            
        </header>