
<!-- <?php require 'php/reg.php' ?>
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> BudgIT</title>
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
                    <p> <a href="index.html" > Home</a>
                        <a href=""> About</a>
                        <a href="login.html" id="login"> Login</a>
                        <a href="signup.html" id="signup" class="active"> Signup</a>
                        <a href=""> Contact</a>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                <img src="img/mdi_menu.png" alt="">
                              </a>
                    </p>
                </div>-->
            </header>
            <div class="content">
            
                <h1>Signup </h1>
                <p>It only takes a minute</p>

                <form id="form" action="signUp.php" method="POST">
                    <div>
                        <?php if($regError!="") { echo $regError; } ?>
                    </div>
                    <label>Your Name</label><br>
                    <input type="text" id="username" name="username"  placeholder="Lastname first" required><span id="Evalid"></span><br><br>
                    
                    <label>Your Email Address</label><br>
                    <input type="email" id="email" name="email"  placeholder="email" required><span id="Evalid"></span><br><br>
                   
                    <label>Password</label><br>
                    <input type="password" name="password" id="password" placeholder="password" required style="width: 230px"><i class="fa fa-eye" id="view"></i><br><br>
                    
                   <label>Confirm Password</label><br>
                    <input type="password" name="password2" id="password2" placeholder="Retype password" required onkeyup='checkPassword();'>
                    <span id="message"></span><br><br>
                    
                    <button id="submit" type="submit" disabled>Sign Up</button><br><br>
                    <span>By clicking the Sign Up button, you agree to our</span><br>
                    <span><a href="">Terms & Conditions</a> and <a href=""> Privacy Policy</a></span>
                </form>
            
            </div>
            <div class="clear"></div>
            <footer>
                <b>&copy;Copyright 2019 Kymopoleia</b>
            </footer>
        </div>
    </div>
    <!-- <script src="script.js"></script> -->
</body>
</html>