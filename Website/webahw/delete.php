<!DOCTYPE html>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
<?php
 include 'header.php';
 ?>















<!DOCTYPE html>
<html>
<head>
	

</head>
<body>
<div>
<center>
<h1> Select Appliance you want to delete </h1>
 <form method="POST">
  <br>
  <br>
  <br>
 Select Appliance: <select name="name">
 	<?php 
 	$conn=mysqli_connect("localhost","root","","prj")
 	 or die ("connection is not established");
 	 $q=" select name from appliance_record";
 	 $query=mysqli_query($conn,$q);
     while($row=mysqli_fetch_array($query))
     {
     	echo  "<option>".$row['name']. "</option>";
	 }

      
 	 ?>
	
 	<input class="btn btn-success" type="submit" value="Delete record" name="btndel">
  </body>
 	</form>
 	</center>

 	<?php 
 	     if(isset($_POST['btndel']))
 	     {
 	     	$name=$_POST['name'];
 	     	$q1="Delete from appliance_record WHERE name='$name'";
 	     	$query1=mysqli_query($conn,$q1);
 	     	if($query1==true)
 	     	{
 	     		echo "data deleted successfully";
 	     	}
 	     	else
 	     	{
 	     		echo "failed";


 	        
 	     }
 	     	 mysqli_close($conn);
 	     	}
  ?>
  <br> 
<br>
<br> 
</br>
</br>
</br>
<button  type="button"><a href="indexx.php"  class="btn btn-primary">Go back to home page!</a></button>
</body>
</html>




<style>
.background {
 background-color: #cccccc;
 }
 body {
  background-image: url('iot.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

</style>
  





