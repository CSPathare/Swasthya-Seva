<?php
	session_start();
  //require_once "dbcon.php";
  require "dbcon.php";
  //print_r($_POST);
	if (isset($_POST['signup']))
	{
    echo "hello";
		$flag=0;
		$username = $_POST['username'];
		$password = $_POST['password'];
		//$cpassword = $_POST['name'];
		$name = $_POST['name'];

		$village = $_POST['village'];
		$email = $_POST['email'];
		$mobile_no = $_POST['mobile'];

	$print="SELECT * FROM `doctors`";
	$sql=mysqli_query($dbconn,$print);
		while($rowsel=mysqli_fetch_assoc($sql))
		{
			if ($username == $rowsel['loginid'])
			{
				echo "<script> alert(\"Username Already Exists...!!\"); </script>";
				$flag=1;
				break;
			}
		}
		if ($flag == 0)
		{
			echo "string";
			if ($password == $password)
			{
				echo "string2";
				$query = "INSERT INTO `nurses` ( `name`, `mobile`, `username`, `password`, `email`, `village`) VALUES ( '$name', '$mobile_no', '$username', '$password','$email','$village')";
			//echo $query;
				if ($result = mysqli_query($dbconn,$query))
				{
					echo "<script> alert(\"User Added Successfully!! Plzz Login to continue...!!\"); </script>";
					header("Location:login.php");
				}
				else
					echo "Unable to add user!!";
			}

		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="bootstrap\3.3.6\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
	<script src="js/jquery/1.12.0/jquery.min.js"></script>
	<script src="bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body class="back">
<div class="jumbotron">
	<h1 style="letter-spacing: 17px;">
		Signup
	</h1>
</div>
<div class="container-fluid test1">
<div class="row">
<div class="col-xl-12">
<form method="POST" action="signup_nurse.php">
	<div class="form-group">
	
	<input type="text" name="username" class="form-control" id="username" placeholder="Username" required="">
	</div>

	<div class="form-group">
	<input type="password" name="password" class="form-control" id="password" placeholder="password" required="">
	</div>


	<div class="form-group">
	<input type="text" name="name" class="form-control" id="name" placeholder="Name">
	</div>


	<div class="form-group">
	<input type="text" name="mobile" class="form-control" id="mobile" placeholder="mobile">
	</div>

	<div class="form-group">
	<input type="text" name="village" class="form-control" id="village" placeholder="village">
	</div>


	<div class="form-group">
	<input type="text" name="email" class="form-control" id="email" placeholder="email">
	</div>
  <br>
  <button class="btn" name="signup" type="submit">Register</button>
  <button class="btn" onclick="location.href='login.php'">Log-In</button>
</form>
</div>
</div>
</div>
</body>
</html>

