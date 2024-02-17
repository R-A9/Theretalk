<?php
	session_start();
    require "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body class="mainbody">
	<main>
	<?php
		if (isset($_SESSION['username']) && isset($_SESSION['uid']) && isset($_SESSION['name'])){
			$_SESSION['username'] = true;
			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;}
		}
		else{
			echo "<br><br>not logged in, login page redir";
			header("refresh:2;url=login/login.php");
			exit();
		}
		
		// If user is logged in.
		

		$conf = test_input($_POST['confession']);

		if(empty($conf)){
			echo "<br>No Confession Entered.<br>";
			header("refresh:2;url=".$_SERVER['HTTP_REFERER']."");
			exit();
		}
	

			// POST to database
            $date = date('d-m-y h:i:s');
            $alias = test_input($_POST['alias']);
            $user = $_SESSION['name'];
			$conf = test_input($_POST['confession']);

			if($conn->query("INSERT INTO `confessions` (cid,alias,confession,name) VALUES('0','$alias','$conf','$user')")){
				echo "<br>Confession Successfully Submitted.<br>";
				header("refresh:2;url=".$_SERVER['HTTP_REFERER']."");
				exit();
			}
			else{
				echo "<br>Sorry. A Problem Occured.<br>";
			}
		
	?>
	</main>
</body>
</html>