<?php
  session_start();
  $_SESSION['uid']=0;
  require_once "dbcon.php";


    if (isset($_POST['login']))
    {
      print_r($_POST);
      $username = $_POST['username'];
      $password = $_POST['password'];
      $as = $_POST['as'];

      if($as == "Doctor")
      {
        $query = "SELECT `id`,`username`,`password`,`name` FROM `doctors` WHERE `username` = '$username' AND `password` = '$password'";
      }
      if($as == "Nurse")
      {
        $query = "SELECT * FROM `nurses` WHERE `username` = '$username' AND `password` = '$password'";
      }
      if ($result = mysqli_query($dbconn,$query))
      {
        if (mysqli_num_rows($result) == 1)
        {
          $row = mysqli_fetch_assoc($result);
          $id = $row['id'];
          $_SESSION['uid'] = $id;
          $_SESSION['uname']=$username;
          if($as == "Nurse")
          {
            $_SESSION['village'] = $row['village'];
          }
          if($as == "Doctor")
          header("Location:doctor.php");
          if($as == "Nurse")
          header("Location:nurse.php");
          echo "hii";
        }
        else
        {
          echo "Invalid Username/Password Cobination";
        }
      }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>SWASTHYA-SEVA</title>
	<link rel="stylesheet" type="text/css" href="bootstrap\3.3.6\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery/1.12.0/jquery.min.js"></script>
	<script src="bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body class="back">
<div class="jumbotron">
	<h1>SWASTHYA-SEVA</h1>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 log">
			<center><h3 style="color:#2d1b11;letter-spacing: 6px;"><b>LOGIN</b></h3></center>
			<!--center><img src="images/yuna.jpg" alt="" class="img-circle" ></center-->
      <?php echo'<center><p style="color:#fff;">'.$t.'</p><center>'?>
			<div class="col-sm-12" style="display: inline-grid;">
			<br>
			<form method="POST" action="login.php">
        <input type="radio" name="as" value="Nurse"   />Nurse <br/>

        <input type="radio" name="as" value="Doctor"  />Doctor<br/><br/> 
			<div class="form-group">
			  <input type="text" name="username" class="form-control" id="usr" placeholder="Username">
			</div>
				<div class="form-group" style="background-color: #2d1b11;box-shadow: 6px 4px 14px black;">
				  <input type="password" name="password" style="background-color: #f5f5f5;" class="form-control" id="pwd" placeholder="Password">
				</div>

				<button class="btn" type="submit" name="login">Login</button>&nbsp&nbsp&nbsp&nbsp&nbsp
				<button class="btn"><a href="signup_doc.php" style="text-decoration: none;color: #0c2031;">Sign-Up(DOC)</a></button>
        <button class="btn"><a href="signup_nurse.php" style="text-decoration: none;color: #0c2031;">Sign-Up(NURSE)</a></button>	
				<br>
			</form>
			</div>
		</div>
	</div>
</div>
<footer class="footer">
  copyright@rajasthan.gov.in
</footer>
</body>
</html>