<?php 
session_start();
$user=$_SESSION["user"];

$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"lecturedb");

$ret = "SELECT * FROM usertb WHERE Username='".$user."'";
$ret_result = mysqli_query($con,$ret) or die ('Error');
$row=mysqli_fetch_array($ret_result );
?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="css/style2.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- Navbar -->
<div class="w3-top">
  <ul class="w3-navbar w3-blue w3-card-2 w3-left-align w3-large">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    </li>
    <li><a href="index.html" class="w3-padding-large w3-white">Home</a></li>
    <li class="w3-hide-small"><a href="RegisterLogin.html" class="w3-padding-large w3-hover-white">LogOut</a></li>
    <li class="w3-hide-small"><a href="edituser.php" class="w3-padding-large w3-hover-white">Your Details</a></li>
   
    <li class="w3-hide-small"><a href="about.html" class="w3-padding-large w3-hover-white">About</a></li>
  </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-large w3-black">
      <li><a class="w3-padding-large" href="#register.html">Registration</a></li>
      <li><a class="w3-padding-large" href="#login.html">Link 2</a></li>
      <li><a class="w3-padding-large" href="#">Link 3</a></li>
      <li><a class="w3-padding-large" href="#">Link 4</a></li>
    </ul>
  </div>
</div>

<center>
	<br/><br/><br/>
	 <div class="col-md-3">
        <div class="text-center">
          <img src="images/download.png" class="avatar img-circle" alt="avatar">
          <h6>&nbsp;</h6>
        </div>
      </div>
	  
		<br/>
			<h1>Update user profile</h1>
		</div>
		<p> </p>
			<center><form method ="post" action=update.php>
				<ul class="left-form">
					
					<li>
						
					</li> 
					
					<li>
						
					</li> 
						<li>
						<input type="password"   placeholder="password" name="password" value="<?php echo $row[7];?>" required/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="password"   placeholder="confirm password" value="<?php echo $row[7];?>" required/>
						
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="Email" name="email" value="<?php echo $row[2];?>" required/>
						<a href="#" class="icon ticker"> </a>
						<div class="clear"> </div>
					</li> 
					<li>
						
						
					</li>
					<li>
						<input type="text"   placeholder="Phone" name="phone" value="<?php echo $row[4];?>" required/>
						<a href="#" class="icon ticker"> </a>
						<div class="clear"> </div>
					</li> 
				  
					  <li>Address:
						<textarea name ="address" rows ="3" cols="50" placeholder="Address" value="<?php echo $row[5];?>" required/>
						</textarea>
					
					</li> 
					<li>
						<h1>College:</h1> <br>
						<input type="radio"   name= "college" value= "CSIT"/>
						CSIT
						<div class="clear"> </div>
					
						<input type="radio"   name= "college" value= "COE"/>
						COE
						<div class="clear"> </div>
						
						<input type="radio"   name= "college" value= "CFGS"/>
						CFGS
						<div class="clear"> </div>
						
						<input type="radio"   name= "college" value= "Masters"/>
						Masters
						<div class="clear"> </div>
						
						<input type="radio"   name= "college" value= "Not Student"/>
						Not a Student 
						<div class="clear"> </div>
						
					</li>
					</li> 
					<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Please inform me of upcoming  programs by Computer Science Club</label>
					<input type="submit"  value="Update Account">
					 <input class="btn btn-default" value="Cancel" type="reset">
						<div class="clear"> </div>
				</ul>
			</form>
			</center>
					
					</div>
					<div class="clear"> </div>
				</ul>
				<div class="clear"> </div>
					
			</form>
</center>
			
		</div>
			<!-----start-copyright---->
   					<div class="copy-right">
						<p>Template by <a href="http://w3layouts.com">w3layouts</a></p> 
					</div>
				<!-----//end-copyright---->

	
</body>
</html>