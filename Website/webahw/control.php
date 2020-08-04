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






<style>
body {
  background-image: url('iot.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
 }
</style>
<?php
 include 'header.php';
 ?>


<?php

$conn=mysqli_connect("localhost","root","","prj")
 	 or die ("connection is not established");

 	 if (isset ($_POST["submit"])) {

 	 	$control=$_POST["control"];
 	
     //$q= Select name from appliance_record where id = '$_POST[id]';
 	 $sqlQuery=	 "UPDATE appliance_record SET control = '$_POST[control]' WHERE name = '$_POST[name]'";
 	 	if(mysqli_query($conn,$sqlQuery))
 	 	{
 	 		echo" successfull";
 	 	}
 	 	else
 	 	{
 	 		echo"failed"; 
 	 	}
 	 }



?>


<!DOCTYPE html>
<html>
<body>
	<center>
		<h1> Control all your Appliances </h1>
	<form method="POST">
    <br>
    <br>
    Select Appliance you want to on or off: <select name="name" >
<?php
$q=" select name from appliance_record";
 	  $query=mysqli_query($conn,$q);
 	 while($row=mysqli_fetch_array($query))
     {
     	echo  "<option>".$row['name']. "</option>";
     }
     ?>



	Control:<input type="radio" name="control" value="On"required>On<input type ="radio" name="control" value="Off"required>Off
	<br> </br>
<br> </br>

	<input  class="btn btn-success" type="submit" name="submit" value="Insert Value"/>
	

	</form>	

	</center>

</body>
</html>


<br> </br>
<br> </br>
<br> </br>
<br> </br>


<!DOCTYPE html>
<html>
<style>
.button {
  background-color: 	#ADD8E6; 
  border: none;
  color: white;
  
padding: 10px 10px;
  text-align: center;
  display: inline-block;
  font-size: 10px;
  
  
  
}
</style>
<button  type="button"><a href="indexx.php"  class="btn btn-primary">Go back to home page!</a></button>
</html>
