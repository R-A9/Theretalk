<?php
session_start();
if (empty($_SESSION['uid'])) {
    header('Location: index.php');
    exit;
}


include "../db_conn.php";


$mysqli = mysqli_connect("localhost", "root", "boom123@4", "my_db");
$sql = "SELECT `alias`, `confession`,`name` FROM confessions";
$result = mysqli_query($mysqli, $sql);

while($list = mysqli_fetch_array($result, MYSQLI_ASSOC))


if (isset($_POST['submit']) && $_POST['submit'] == 'deleteId') {

    //Decline
    $stmt = $conn->query("DELETE FROM confessions WHERE confession = '$list[confession]'");
    echo "<br>uploaded<br>";
    header("refresh:2;url=".$_SERVER['HTTP_REFERER']."");
    exit();
    echo "<br>Sorry. A Problem Occured.<br>";
}
else{

    //Approve


    $stmt = $conn->query("INSERT INTO `mod-approval`(`alias`, `confession`,`name`) VALUES ('". $list['alias']."' , '" .$list['confession']. "' ,'" . $list['name']."')");
    $stmt = exec($stmt);
    echo "<br><br>";
    header("Location:index.php");

    $stmt = $conn->query("DELETE FROM confessions WHERE confession = '$list[confession]'");
        echo "<br>uploaded<br>";
        header("refresh:2;url=".$_SERVER['HTTP_REFERER']."");
        exit();
        echo "<br>Sorry. A Problem Occured.<br>";
    }


