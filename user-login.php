
<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="images/logo/e.png">
    <title>SORAN CINEMA</title>
</head>
<body>
    <!--Header section-->
    <header>


    <div class="logo">
        <img src="images/logo/e.png" alt="">
        <h3>SORAN CINEMA</h3>
    </div>
    <div class="nav" id="small_menu">
        <button class="hamburger" id="hamburger">
            <i class="fas fa-bars"></i>
        </button>
    </div>
  
    <div class="user">
        <a href="test.php">Register</a>
     
    </div>  
</header>
  <head>
    <link rel="stylesheet" href="Css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"/>
  </head>
  <body><center>
    <div class="login-box">
      <h1>Login</h1>
      <form action="Plogin.php" method="POST">
        <label>Email</label>
        <input type="email" name="mail" placeholder="" >
        <label>Password</label>
        <input type="password" name="pass" placeholder=""><br><br>
        <button type="submit"  name="login">Login</button>
      <closeform></closeform></form>
    </div>
    <p class="para-2">
      Not have an account? <a href="test.php">Register  Here</a>
    </p>
      </center>
  </body>

