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

<style>
body {
  background-image: url('iot.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<!DOCTYPE html>
<html>
<head>
<h1> <center>Consumption of your appliances</center> </h1>
<style>
table {
border-collapse: collapse;
width: 100%;
color:  black;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: black;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th> Name of Appliance</th>
<th> Wattage </th>
<th> Status(On/Off) </th>
<th> Port Number </th>


</tr>

<br>
<?php
$conn = mysqli_connect("localhost", "root", "", "prj");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name,wattage,control, port FROM appliance_record";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
  echo "<tr><td>". $row["name"]. "</td><td> " . $row["wattage"]. "</td> <td> ". $row["control"]."</td><td> ". $row["port"]."</td></tr>" ;
}


echo "</table>";
 

}
else { echo "0 results"; }

$sql1= "SELECT SUM(wattage) FROM appliance_record where control = 'On'";
$result1 = $conn->query($sql1);
while($row1 = $result1->fetch_assoc()) {
echo  "Total Consumption = ". $row1['SUM(wattage)'];

}


$conn->close();


?>
</table>





</body>
</html>

<?php{
}
?>


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

