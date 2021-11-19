<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/l-style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> 
	</head>

	<body>
		<?php
			$mysqli = mysqli_connect("localhost","root","","food");


    if(isset($_POST['login']))
	{
		$firstname = $_POST['username'];
		$pass = $_POST['pass'];
		echo $firstname;

		//$result=$mysqli_query($mysqli,"select * from `rest` where firstname='$firstname' and password = '$pass'");
			$result=$mysqli->query("select * from `rest` where firstname='$firstname' and password = '$pass'");

		if($row = $result->fetch_assoc()){
			//echo $row['firstname'];
			$address = $row["address"];
			$_SESSION['username']=$firstname;
			$_SESSION['$address'] = $address;
			header("location: Menu.php");
			exit();

		}
		//$row= mysql_fetch_assoc($result);

		//if($result!= null){
		//	header("location: Menu.html");
			//exit();
		//}
	}


 ?>

		<div class="container">
			
			<div class="login-form">
				<h3 class="heading"> Login Form</h3>
				<br></br>

				<form method="POST" action="">
				
				<input type="text" name="username" placeholder="Username">
				<input type="Password" name="pass" placeholder="Password">
				<input type="submit" value="Login" name="login" class="lg-btn">
				</form>
				<br>
				<p class="text-white"> Don't have account? <a href="Registration.php">Click Here</a></p>

			</div>


		</div>

	</body>
</html>