<?php
    // Connection to database
    // require('./../config/config.php');
    // require('./../config/db.php');

    $msg = '';
    $msgClass = '';
    $query = '';
    $result = '';

    
?>

<?php include('login.php'); ?>
<?php include('signup.php'); ?>

<html lang="en" dir="Itr">
<head>
    <meta charset="UTF-8">
   <!--  <meta http-equiv="X-UA-Compatible" content="IE=edge">  -->
    <title>Signin-Signup</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./../styles/loginStyles.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="./../Images/imagesfront.jpg" alt="">
                <div class="text">

                </div>
            </div>

             
    </div>
        <form method="post" action="login.php">
           <div class="form-content">
                <div class="login-form">
                    <span class="title">Login</span>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="loginemail" placeholder="Enter your email" >
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="loginpassword" placeholder="Enter your password" >
                        </div>
                            <div class="text"><a href="a">Forget password?</a></div>

                        <div class="button input-box">
                            <input type="submit" name="login" value="LOGIN">
                        </div>
                        <div class="text login-text">Don't have an account? <label for="flip"> Signup now </label> </div>
                    </div>
                </div>

                <div class="signup-form">
                    <span class="title">Register</span>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-user"></i>
                            <input type="text" name="studentid" placeholder="Enter your student ID">
                        </div>
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" placeholder="Enter your IUT email">
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="newpassword" placeholder="Enter your password">
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="confirmpassword" placeholder="Confirm your password">
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="text" name="customer_address" placeholder="Enter your address(Hall address)">
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="number" name="customer_phone" placeholder="Enter your phone number">
                        </div>
                        <div class="button input-box"> 
                            <input type="submit" name="signup" value="SIGNUP">
                        </div>
                        <div class="text signup-text"> Already have an account? <label for="flip"> Login now</label> </div>
                    </div>
                </div>
           </div>
        </form>
    </div>

</body>
</html>