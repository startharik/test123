<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Responsive Table with DataTables</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css'>
<link rel='stylesheet prefetch' href='http://cdn.datatables.net/responsive/1.0.4/css/dataTables.responsive.css'>

      <link rel="stylesheet" href="css/adminstyle.css">

  
</head>

<body>
  <h2>User Details</h2>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <table summary="This table shows how to create responsive tables using Datatables' extended functionality" class="table table-bordered table-hover dt-responsive">
        
        <thead>
          <tr>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Address</th>
            <th>College</th>
            <th>Delete</th>
            
            
          </tr>
        </thead>
        <tbody>
		
		<?php 
 
$con = mysqli_connect("localhost", "root","");
	mysqli_select_db($con,"lecturedb");

	//display all user data except admin's
$res=mysqli_query($con,"SELECT * FROM usertb WHERE NOT info='admin'");
while(list($username,$name,$email,$gender,$phone,$address,$college,$password,$info)=mysqli_fetch_array($res))
{
 //creating tables for all records
echo "<tr>";    
echo "<td>".$username."</td>";
echo "<td>".$name."</td>";
echo "<td>".$email."</td>";
echo "<td>".$gender."</td>";
echo "<td>".$phone."</td>";
echo "<td>".$address."</td>";
echo "<td>".$college."</td>";
// add delete button for each record
echo "<td style='background: #C3EAF1;'><a href='admindelete.php?chk=$username'><img src='http://www.clker.com/cliparts/r/R/j/5/M/q/delete-button-purple-hi.png' height='30' width='60'></a></td>";
echo "</tr>";    
 
}
 
?>

        </tbody>
        <tfoot>
          <tr>
            
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<p class="p"> <a href="logout.php" target="_blank">Logout</a>.</p>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
<script src='http://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
<script src='http://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script>

    <script src="js/adminindex.js"></script>

</body>
</html>
