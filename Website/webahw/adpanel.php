
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


        


<!DOCTYPE html>
<html>
<head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>AHW</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
   </head>

	<h1> <center> Admin's Panel </center></h1>
    <br>

</head>

<body>

  




<center>

<h2> Want to add a user</h2>


<style>
.button {
  background-color: grey; 
  border: none;
  color: black;
  
padding: 10px 10px;
  text-align: center;
  display: inline-block;
  font-size: 10px;
  
}
  
  
}
</style>
<br>
    <a href="adduser.php">
    <img src="adduser.png" alt="Add User" style="width:250px;height:200px;"></a>
    <br>
    <br>

</center>
 

<br>
<br>





<center>
	<h2> Want to view users</h2>
	
	
<style>

body {
  background-image: url('iot.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<br>
    <a href="viewuser.php">
    <img src="viewuser.png" alt="Add User" style="width:250px;height:200px;"></a>
    <br>
    <br>


</center>

<br>
<br>





<center>
	<h2> Want to delete a user</h2>
	

<a href="deleteuser.php">
    <img src="deluser.png" alt="Add User" style="width:250px;height:200px;"></a>
    <br>
    <br>
</center>



<button  type="button"><a href="indexx.php"  class="btn btn-primary">Go back to home page!</a></button>
</body>
</html>






