<?php  



$sname = "localhost";

$uname = "id18805212_ttalk_db";

$password = "}YvhM9VbK{J@9Zy!";



$db_name = "id18805212_theretalk";

date_default_timezone_set('Asia/Manila');



$conn = mysqli_connect($sname, $uname, $password, $db_name);



if (!$conn) {

	echo "Connection Failed!";

	exit();

}