<!-- Can't seem to make the update.php work, data does not update to the DB even though it the loop runs --> 
<?php
	$con = mysqli_connect("localhost", "root", "") or die ("Cannot connect to server." .mysqli_error($con));
	mysqli_select_db($con,"lecturedb");
	
	session_start();
	$user=$_SESSION["user"];
	$name = @$_POST["name"];
	$email = @$_POST["email"];
	$gender = @$_POST["gender"];
	$phone = @$_POST["phone"];
	$address = @$_POST["address"];
	$college = @$_POST["college"];
	$password = @$_POST["password"];

    $update_sql="UPDATE usertb SET Password ='$password', Email = '$email', Phone = '$phone', Address = '$address', College = '$college' WHERE Username = '$user'";
    $sql_result=mysqli_query($con,$update_sql);
	
    if($sql_result)
	{
		echo "<h2>Successful! Record has been updated.</h2>";
		header('Refresh: 3; URL=edituser.php');
	}
	else
	{
		echo "Error in updating the data";
	}


?>