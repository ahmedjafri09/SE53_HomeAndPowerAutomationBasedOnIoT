


<!DOCTYPE html>
<html>
<style>
 body {
  background-image: url('iot.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<head>

<head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>AHW</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
   

<style>
table {
border-collapse: collapse;
width: 100%;
color: black;
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
<body >
<br>
<br>
<h1> <center>All Registered Users</center> </h1>
<br>
<br>
<table>
<tr>
<th> id</th>
<th> name </th>
<th> email </th>
<th> password </th>



</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "prj");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>". $row["username"].  "</td><td>". $row["email"]. "</td><td>". $row["password"]."</tr></td>";
}
echo "</table>";
} else { echo "0 results"; }
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




