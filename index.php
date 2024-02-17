

<?php 
$pdo = require "db_conn.php";
session_start();
if (isset($_SESSION['username'])) { 
  
{
  
  
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title> There•talk </title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/91f04e1fcd.js" crossorigin="anonymous"></script>
</head>

<body>

<?php if ($_SESSION['role'] == 'admin') {
    header('Location: moderator/index.php');
  }
 ?>

  <section>
    <div class="circle"> </div>
    <header>
      <br>
      <br>
      <ul>
        <li> <a href="https://tsc.edu.ph"> TSC </a></li>
        <li> <a href="/about/about.html"> ABOUT US </a></li>
        <li> <a href="/login/login.html"> <?php echo $_SESSION["username"];?> </a></li>
        <li> <a href="logout.php"> Logout </a></li

      </ul>
    </header>

    <h1>
      <a href="#" class="logo">
        <center><img src="theretalk.png"></center>
      </a>
    </h1>

  </section>

  <!--container-->
  <div class="container">

  <!-----------left-sidebar--------------->
    <div class="left-sidebar">
      <!--example texts lang, pwede ibahin or tanggalin anytime-->
      <div class="imp-links">
        <h2>Take Action</h2>
        <a href="#">Create a Plan to Take Care of Your Mental Health</a>
        <a href="#">Mental Health Warning Signs and When to Ask for Help</a>
        <a href="#">How to Help a Friend Reach Out for Support</a>
        <a href="#">How to Listen and Be Heard</a>
      </div>
      <div class="shortcut-links">
        <!--pwede dito yung mga videos or podcasts na pwede nila mapakinggan to make the feel better-->
        <p>This might Help</p>
        <a href="#"><img src="raze.jpg">With a Smile</a>
        <a href="#"><img src="raze.jpg">Be Happy</a>
        <a href="#"><img src="raze.jpg">Hello Koro Sensei</a>
        <a href="#"><img src="raze.jpg">Di ko na Alam</a>
      </div>
    </div>

  <!-----------main-content--------------->
    <div class="main-content">
      <h2>Posts:</h2>
      <div class="write-post-container">
        <form action="submit.php" onsubmit="event.preventDefault" autocomplete="off" method="post">
          <div class="user-profile">
            <img src="pfp.png">
              <div>
                <input type="text" name="alias" placeholder=" Alias/Name" required/><br>
                <small><i class="fa-solid fa-earth-asia"></i> Public</small>
              </div>
          </div>

          <div class="post-input-container">
            <textarea name="confession" id="input" rows="3" minlength="20" maxlength="500" placeholder=" How are you feeling?"></textarea>
            <div class="post-btn">
              <input type="submit" class="post" value="Post">
            </div>
          </div>
        </form>
      </div>

          

<?php
   $mysqli = mysqli_connect("localhost", "root", "boom123@4", "my_db");
   $sql = "SELECT `alias`, `confession` FROM `mod-approval`";
   $result = mysqli_query($mysqli, $sql);

   while($list = mysqli_fetch_array($result, MYSQLI_ASSOC))
   { // query your db
    echo"<div class='post-container'>
    <div class='user-profile'>
    <img src='pfp.png'>
      <div>
        <p class='post-text'>". $list['alias']. "</p>
      </div>
    </div>
    <P class='post-text'>". $list['confession']. "</P>
  </div>";

   }
?>
    </div>    


  <!-----------right-sidebar--------------->
    <div class="right-sidebar">
      <div class="sidebar-title">
        <h3>Mental Health Hotlines</h3>

      </div>

      <div class="event">
        <h4>• TSC Guidance Counselor Office</h4>
        <h5 class="service">GLOBE/TM:</h5>
        <P>0977 074 3547</P>

        <h4>• DOH-National Mental Health Crisis Hotline 24/7</h4>
        <h5 class="service">GLOBE/TM:</h5>
        <p>0966-351-4518 <br>0917-899-8727</p>
        <h5 class="num">SMART/SUN/TNT:</h5>
        <p>0908 639 2672</p>

        <h4>• Hopeline Philippines 24/7</h4>
        <h5 class="service">GLOBE/TM:</h5>
        <p>(917) 558 4673</p>
        <h5 class="num">DIAL:</h5>
        <p>2919 (toll-free)</p>
        <h5 class="num">SMART:</h5>
        <p>(918) 873 4673</p>
        <h5 class="num">PLDT LANDLINE:</h5>
        <p>(2) 8804 4673</p>

        <h4>• Philippine Mental Health Association, Inc. (PMHA) Online Support</h4>
        <h5 class="service">GLOBE/TM:</h5>
        <p>(917) 565 2036</p>
        <h5 class="num">EMAIL:</h5>
        <p>pmhacds@gmail.com</p>
      </div>

    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>

<?php 
}}else{
	header("Location: login/login.php");
} 
?>