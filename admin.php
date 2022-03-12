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
        <ul>
            <li><a href="user-login.php">Log Out</a></li> 
        </ul>
    </div>
    <div class="user">
        <a href="user-login.php">Login</a>
     
    </div>  
</header>
    
          <div class="addd">
           <h1> Enter the Movie details</h1>
           <p> <b></b> </p> <br>

           <form action="admin-control.php" method="POST" enctype="multipart/form-data">

            <input type="text" class="form-control" placeholder="Movie Name" name="mname" value=""><br>
             <input type="text" class="form-control" placeholder="Year of Release" name="release" value="">
             <br>
             <input type="text" class="form-control" placeholder="Genre" name="genre" value="">
             <br>
             <input type="number" class="form-control" placeholder="Runtime in minutes" name="rtime" value="">
             <br>
             <input type="text" class="form-control" placeholder="Description..." name="desc" value="">
             <br>

                 <table>
                   <tr>
                     <td> <label for=""><b>Upload Image : </b></label> </td>
                     <td>
                              <input type="hidden" name="size" value="100000">

                              <input type="file" name="image" value="">
                          
                     </td>
                   </tr>
                 </table>
                 <table >
                   <tr>
                      <td> <label for=""><b>Upload Video : </b></label> </td>
                     <td>  <input type="hidden" name="size" value="30000000">
                           <input type="file" name="video" value="">
                     </td>
                     </tr>
                     <tr>
                       <td  colspan="2"><center>
                   <button type="submit"  name="upload"> Uploud</button></center> 
                       </td>
                   </tr>
                 </table>
              <br>
               

           </form>

        </div>
    
</body>
</html>