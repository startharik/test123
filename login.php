<html>
<head>
<title>Login</title>
</head>

<body>
<?php

	$username = @$_POST["loginuser"];
	$pass = @$_POST["loginpass"];
	
	$con = mysqli_connect("localhost", "root", "");
	mysqli_select_db($con,"lecturedb");
	
	$sql=mysqli_query($con,"SELECT * FROM usertb WHERE username='".$username."'");
	
	if(mysqli_num_rows($sql)== 0)
	    echo "Username does not exist! Redirrecting...";
		header('Refresh: 3; URL=RegisterLogin.html');
	
	        $row=mysqli_fetch_array($sql,MYSQL_BOTH);
			
	        if($row["Password"] == $pass && $row["Info"] == "admin")//for ADMIN
			{
				session_start();
				$_SESSION["user"] = $username;
				echo "<h2>Successful! Welcome ".$username."!</h2>";
				header('Refresh: 3; URL=admin.php');
			}
			else if($row["Password"] == $pass && $row["Info"] !="admin") //FOR USER
			{
				session_start();
				$_SESSION["user"]= $username;
				//go to edituser.php
				echo "<h2>Successful! Welcome ".$username."!</h2>";
				header('Refresh: 3; URL=edituser.php');
			} 
			
			else
				echo "Password wrong";
			
?>
</body>
</html>