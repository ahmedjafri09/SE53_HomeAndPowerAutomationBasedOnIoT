
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
		
		$max = $_POST['max'];
		$min = $_POST['min'];
 	 	$automate=$_POST["automate"];

		  $sqlQuery="UPDATE automate_app SET automate = '$automate' , maximum_temp = '$max', minimum_temp = '$min' WHERE id='1'";
		  
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
	<h1> Automate all your appiances </h1>
	
	<form method="POST">
		<br>
		<br>
	Automate status:<input type="radio" name="automate" value="On">On<input type ="radio" name="automate" value="Off">Off
		<br> </br>
Enter maximum temperature:
    <br>
	 <input type="int" name="max">
	<br> <br>
	Enter minimum temperature: 
    <br>
	<input type="int" name="min">
	<br> <br>
	<input class="btn btn-success" type="submit" name="submit" value="Insert Value"/>
		

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


