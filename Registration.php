<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="css/rstyle.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
		


	</head>
	<body>


		<?php
$mysqli = mysqli_connect("localhost","root","","food");

	if(isset($_POST['submit']))
	{
		$firstname = $_POST['firstname'];
		
		
		$email = $_POST['email'];
		
		
		$password = $_POST['password'];
		
		
		$number = $_POST['number'];
			
		$zip = $_POST['zip'];
		
		
		$gender = $_POST['Gender'];

       $secondname = $_POST['secondname'];
       

       $conemail = $_POST['conemail'];
       

       $conpassword = $_POST['conpassword'];

       $address = $_POST['address'];


		
		
		
		if($password==$conpassword){
		
			$result=$mysqli->query("INSERT INTO `rest`(`firstname`, `email`, `password`, `number`, `zip`, `secondname`, `conemail`, `conpassword`, `gender`, `address`) VALUES ('$firstname','$email','$password','$number','$zip','$secondname','$conemail','$conpassword','$gender','$address')");
}
		
}
		?>
		



	<div class="title"><center><h1> Sign Up Form</h1></center></div><br>
	<img src="images/r8.png" alt="logo" class="logo">

		<div class="container">

			<div class="signup-form">
				
				<form action="" method="post">
				<div class ="form-left">
					<input type="text" name="firstname" placeholder="UserName:">
					<input type="email" name="email" placeholder="Email Id:">
					<input type="password" name="password" placeholder="Password:">
					<input type="number" name="number" placeholder="Phone Number:">
					<input type="text" name="zip" placeholder="Zip:">

				
			       <div class="gender">
			        <input type="radio" name="Gender" value="Male" >Male   
					<input type="radio" name="Gender" value="Female" >Female   
					<input type="radio" name="Gender" value="other" >Other   
					</div>


					


				</div>
				<div class="form-right">
				<input type="text" name="secondname" placeholder="First Name:">
				<input type="email" name="conemail" placeholder="Confirm Email Id:">
				<input type="password" name="conpassword" placeholder="Confirm Password:">
				<input type="text" name="address" placeholder="Address:">
			
				
				

			  <input type="submit" name="submit" class="submit-btn">  Submit </a>
				</div>
				</form>

				</div>

			
			




		</div>
		
</html>