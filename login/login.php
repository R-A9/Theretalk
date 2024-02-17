<!DOCTYPE html>

<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['uid'])) {  ?>


<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="login-style.css">

    <!-- ===== Font Awesome Icons ===== -->
    <script src="https://kit.fontawesome.com/91f04e1fcd.js" crossorigin="anonymous"></script>
         
    <!--Student Login-->
</head>
<body>
    
  <section>

    <h1>
      <a href="#" class="logo">
        <center><img src="theretalk.png"></center>
      </a>
    </h1>

  </section>

  <!--START LOGIN-->
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>


                <form action="check-login.php" method="post">
                    <div class="input-field">
                        <input type="text" name="username" placeholder="Enter your student no. or username" >
                        <i class="uil uil-credit-card-search"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="password" placeholder="Enter your password" >
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <br>
                    <b> Login Type </b>
                     <select name="role">
                        <option value="user">User⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀</option>
                        <option value="admin">Moderator⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀</option>
                    </select>




                    <div class="input-field button">
                        <input type="submit" value="Login Now">
                    </div>
                </form>


<script src="script.js"></script>

</body>
</html>
<?php }else{
	header("Location: ../public post/index.php");
}?>
