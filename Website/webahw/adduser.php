
<style>
.background {
 background-color: #cccccc;
 }
</style>
<html>
<head>
<head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>AHW</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
   </head>
</head>
<body>

  <br><br><br><br>
<h1> <center>Add an User</center></h1>
<center>

<form  method="POST">
	
	Enter username: 
    <br>
	<input type="varchar" name="usn" required>
	<br> <br>
	Enter email:
    <br>
	<input type="varchar" name="e" required>
	<br> <br>
	Enter password:
    <br>
	<input type="varchar" name="p" required>
	<br> <br>
	<input  class="btn btn-success" type="submit" value="Insert Record" name="submit">
  
	<br> <br>
</form>
</center>
</body>
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

$u = $_POST["usn"];
$em= $_POST["e"];
$ps = $_POST["p"];
$sql = "INSERT INTO users ( username, email, password)
VALUES ( '$u', '$em','$ps')";
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
body {
  background-image: url('iot.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<button  type="button"><a href="indexx.php"  class="btn btn-primary">Go back to home page!</a></button>
</html>




