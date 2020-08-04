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

 <?php
 include 'header.php';
 ?>

<body>
 <div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
<div>

<h1> <center>Add Your Appliance here</center></h1>

<center>

<form method="POST">
	Enter Appliance name: 
    <br>
	<input type="text" name="nm">
	<br> <br>

    <br>
    Appliance type: <select name="type">
    <option value="Room Cooler">Room Cooler</option>
    <option value="Fan">Fan</option>
    <option value="Light">Light</option>
  </select>
	<br> <br>
	Enter Appliance wattage:
    <br>
	<input type="text" name="wattage">
	<br> <br>
	Enter Appliance port:
    <br>
	<input type="text" name="port">
	<br> <br>
	<input class="btn btn-success" type="submit" value="Insert Record" name="submit">
	<br> <br>
</form>
</center>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"]))
{
$n = $_POST["nm"];
$t = $_POST["type"];
$w = $_POST["wattage"];
$p = $_POST["port"];


$sql = "INSERT INTO appliance_record (name, type, wattage, port)
VALUES ('$n', '$t', '$w', '$p')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('data inserted')</script>";
}
   else {
  echo "<script>alert('data not inserted')</script>";
}

$conn->close();

}
?>

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
</body>
</html>
