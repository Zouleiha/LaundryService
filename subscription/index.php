<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Form</title>
    <link rel="stylesheet" href="styles/customerStyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <input type="checkbox" id="toggle">
  <label for="toggle" class="show-btn">Click here to subscribe</label>
  <div class="wrapper">
    <label for="toggle">
    <i class="cancel-icon fas fa-times"></i>
    </label>
    <div class="icon"><i class="far fa-envelope"></i></div>
    <div class="content">
      <header>Become a member by Subscribing </header>
      <p>Subscribe to our webpage and get inbox message in your email.</p>
    </div>
    <form action="index.php" method="POST">
    <?php 
    $userEmail = ""; 
    if(isset($_POST['subscribe'])){ 
      $userEmail = $_POST['email']; 
      if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ 
        $subject = "Thanks for Subscribing us";
        $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
        $sender = "From: adt@gmail.com";
        //php function to send mail
        if(mail($userEmail, $subject, $message, $sender)){
          ?>
          
          <div class="alert success-alert">
            <?php echo "Thanks for Subscribing." ?>
          </div>
          <?php
          $userEmail = "";
        }else{
          ?>
          
          <div class="alert error-alert">
          <?php echo "Failed while sending your mail!" ?>
          </div>
          <?php
        }
      }else{
        ?>
        
        <div class="alert error-alert">
          <?php echo "$userEmail is not a valid email address!" ?>
        </div>
        <?php
      }
    }
    ?>
      <div class="field">
        <input type="text" class="email" name="email" placeholder="Email Address" required value="<?php echo $userEmail ?>">
      </div>
      <div class="field btn">
        <div class="layer"></div>
        <button type="submit" name="subscribe">Subscribe</button>
      </div>
    </form>
    <div class="text">Your information is confidential.</div>
  </div>
</body>
</html>