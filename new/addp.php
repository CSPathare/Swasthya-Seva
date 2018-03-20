<?php
	session_start();
  //require_once "dbcon.php";
  require "dbcon.php";
  //print_r($_POST);
	if (isset($_POST['add']))
	{
    //echo "hello";
		$flag=0;
		$name = $_POST['name'];
		$age = $_POST['age'];
		//$cpassword = $_POST['name'];
		//$name = $_POST['name'];

		$remarks = $_POST['remarks'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
    $bg = $_POST['bg'];
    $id = $_POST['id'];

    $weight = $_POST['weight'];
    $source = $_FILES['datafile']['tmp_name'];
    $report='./reports/'.$name.'.jpg';
    //$report = $_POST['datafile'];


  		//move_uploaded_file($source,$dest);


		if ($flag == 0)
		{
			//echo "string";
			if (1)
			{
				//echo "string2";
$query = "INSERT INTO `patients` (`name`, `age`, `mobile`, `email`, `bg`, `weight`, `report`,`remarks`) VALUES ('$name', '$age', '$mobile', '$email', '$bg','$weight','$report','$remarks')";
			//echo $query;
				if ($result = mysqli_query($dbconn,$query))
				{
					//mkdir($prn.'_'.$cname);
					echo "<script> alert(\"patient Added Successfully!! Plzz Login to continue...!!\"); </script>";
					//header("Location:nurse.php");


          $report='./reports/'.$name.'.jpg';
        		$source = $_FILES['datafile']['tmp_name'];
            if (move_uploaded_file($source,$report)) {
              //echo "success";
            }

				}
				else
					echo "Unable to add user!!";
			}

		}
}
?>
<!DOCTYPE html>
<html>
<form method="POST" action="addp.php" enctype="multipart/form-data">


	<label for="username">Pateint Name: </label><br/>
	<input type="text" name="name"   /><br/><br/>


  <label for="password">Age:</label><br/>
	<input type="password" name="age" id="password"  /><br/><br/>



	<label for="username">Mobile: </label><br/>
	<input type="text" name="mobile" id="username"  /><br/><br/>

	<label for="username">Email: </label><br/>
	<input type="text" name="email" id="username"  /><br/><br/>


  	<label for="username">Blood Group: </label><br/>
  	<input type="text" name="bg" id="username"  /><br/><br/>

    <label for="username">Weight</label><br/>
    <input type="text" name="weight" id="username"  /><br/><br/>

    <label for="username">Reports: </label><br/><br/>

  	<input type="FILE" name="datafile" id="username"  /><br/><br/>


    	<label for="username">Remarks </label><br/>
    	<input type="textarea" name="remarks" id="username"  /><br/><br/>

	<input type="submit" name="add" value="Add">

	<br>

</form>
</html>
