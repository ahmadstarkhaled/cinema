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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="images/logo/e.png">
    <title>SORAN CINEMA</title>
</head>
    <body class="bac-home">
            <!--Header section-->
    <header>


    <div class="logo">
        <img src="images/logo/e.png" alt="">
        <h3>SORAN CINEMA</h3>
    </div>
    <div class="nav" id="small_menu">
             <div class="user6">
               <a href="user-login.php">Login</a>
             </div> 
       
        <button class="hamburger" id="hamburger">
            <i class="fas fa-bars"></i>
        </button>
  
            <ul>
              <?php
              if (isset($_SESSION['id'])) {
                if ($_SESSION['id'] == 1) {
                  echo "<li style='list-style: none;' ><a style='margin-left: 700px;margin-top: -200; text-decoration: none; padding: 0px 0px; color: rgb(227, 238, 227);' href=admin.php>Add Move</a></li>";
                }
              }
              echo"<li style='list-style: none;' ><a style='margin-left: 150px;margin-top: -200; text-decoration: none; padding: 0px 20px; color: rgb(227, 238, 227);' href=user-login.php>log Out</a></li>
                  </ul>
                  </div>
                  </header>
                  <div class='container-fluid'>
                  <br><br><br>";
                  include 'dbh.php';
                  $id = $_SESSION['id'];
                  $quer = "SELECT * FROM user1 WHERE id = '$id' ";
                  $quer2 = "SELECT * FROM movies WHERE mid in (SELECT mid from user1 where id = '$id') ";
                  $check = mysqli_query($conn,$quer);
                  $rel = mysqli_fetch_assoc($check);
                  $check2 = mysqli_query($conn,$quer2);
                  $rel2 = mysqli_fetch_assoc($check2);

              echo"<h1 style='color:white;position:sticky;'>WELCOME </h1><b style = 'color: white;font-size: 25px'><i><center> ".ucwords($rel['name'])." !</center></i></b>
                  </div>
                  </header>" 
                ?>
 <div class="movess">
      <div class="jumbotron">
        <h2 style='margin-top:0px;padding-top:0px;'><br><center>Latest updated</center> </h2>
          <div class="row">
            <?php
              include 'latest-fetcher.php';
             ?>
          </div>
      </div>
      <div class="jumbotron">
        <h2><center>All movies</center></h2>
          <?php
            include 'fetcher.php';
            ?>


      </div>
</div>

