<!-- Kapag may nagbago na major sa code tas nagulo yung page, sabihin niyo lang sakin kasi i'll be taking backups ng code -Dwl -->

<?php 
include "../db_conn.php";
   session_start();
   if (isset($_SESSION['username']) && isset($_SESSION['uid'])) {   ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title> There•talk </title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <section>
    <div class="circle"> </div>
    <header>
      <br>
      <br>
      <ul>
        <li> <a href="https://tsc.edu.ph"> TSC </a></li>
        <li> <a href="/about/about.html"> ABOUT </a></li>
        <li> <a href="#"> <?php echo $_SESSION["username"];?> </a></li>
        <li> <a href="../logout.php"> Logout </a></li>

      </ul>
    </header>


    <h1>
      <a href="#" class="logo">
        <center><img src="theretalk.png"></center>
      </a>
    </h1>
    <!-- Box surrounding the confession box and hotlines -->
    <fieldset>
      <legend></legend>
      <fieldset>
        <legend> </legend>
        <!--Start experimental implementation of confession box
      
      ok pwede na galawin, need help -dwl
      -->

      <h3 class="pending">Pending Posts:</h4>

      <div class="float-container">

      <?php
   $mysqli = $conn;
   $sql = "SELECT `alias`, `confession`,`name` FROM confessions";
   $result = mysqli_query($mysqli, $sql);

   while($list = mysqli_fetch_array($result, MYSQLI_ASSOC))
   { // query your db



     echo "<div id='confess' class='float-child'>
     <div class='confess-1'>" . $list['confession']."</div>
       <p class='name'>   " .$list['alias']. " a.k.a ".$list['name']."</p>
       </div>
   </div>

   <div id='btns' class='float-child'>
     <div class='buttons'>Request:</div>
     <form action='modsubmit.php' method='post'>
     <button class='approve' name='submit'>Approve</button>
     <button class='decline' name='submit' value='deleteId'>Decline</button>
     </form>
     </div>";
   }?>
  </div>

        <!-- End experimental implementation -->
        <!-- End -->
      </fieldset>
    </fieldset>
  </section>
</body>

</html>

<?php 
}else{
	header("Location: ../login/login.php");
} 
?>
