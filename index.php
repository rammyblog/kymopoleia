<?php require "php/login.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BudgIT</title>
    <link rel = "icon" href = "images\logo2.png" type = "image/png">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Lobster+Two&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <header>
                <div id="logo-div">
                    <img src="images/logo.png" id="logo" alt=""> <span id="logo-text">BudgIT</span> 
                    <p>Making managing your finances hassle free</p>
                </div>
                <!--<div id="nav-div" class="nav-div">
                    <p> <a href="index.html"> Home</a>
                        <a href=""> About</a>
                        <a href="login.html" class="active" id="login"> Login</a>
                        <a href="signup.html" id="signup"> Signup</a>
                        <a href=""> Contact</a>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                <img src="img/mdi_menu.png" alt="">
                              </a>
                    </p>
                </div>-->
            </header>
            <div class="content">
                <h1>Login </h1>

                <form id="form" action="" method="POST">
                        
                    <div>
                        <?php if($loginError != "") { echo $loginError; } ?>
                    </div>
                    <i class="fa fa-user" style="color: #182955"></i>
                    <input type="text" name="username" id="email"  placeholder="Enter username or email" required><span id="Evalid"></span><br><br>
                    <i class="fa fa-lock" style="color: #182955"></i>
                    <input type="password" name="password" id="password" placeholder="Enter password" required ><br>
                    <!-- <span class="right" style="color: #182955">Forgot Password? Reset <a href="">here</a></span> <br><br> -->
                    <button id="submit" type="submit" value="Login">Login</button><br><br>
                    <span>Don't have an account? <a href="signup.php"> Signup </a></span>
                </form>
                
               
            </div>
            <div class="clear"></div>
            <footer>
                <b>&copy;Copyright 2019 kymopoleia</b>
            </footer>
        </div>
    </div>
    <!-- <script src="script.js"></script> -->
</body>
</html>