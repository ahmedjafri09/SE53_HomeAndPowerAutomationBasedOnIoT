




<!DOCTYPE html>
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
<body class ="background">
<br><br>
<h1> <center> Select user you want to delete </center></h1>
<center>
 <form method="POST">
  <br>
 
 Select user id: <select name="username">
 	<?php 
 	$conn=mysqli_connect("localhost","root","","prj")
 	 or die ("connection is not established");
 	 $q=" select username from users";
 	 $query=mysqli_query($conn,$q);
     while($row=mysqli_fetch_array($query))
     {
     	echo  "<option>".$row['username']. "</option>";
     }

      
 	 ?>
   
 	<input class="btn btn-success" type="submit" value="Delete record" name="btndel">
	 
  </body>
 	</form>
 	</center>

 	<?php 
 	     if(isset($_POST['btndel']))
 	     {
 	     	$id=$_POST['username'];
 	     	$q1="Delete from users WHERE username='$id'";
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
  <br> </br>
<br> </br>
<br> </br>
<button  type="button"><a href="indexx.php"  class="btn btn-primary">Go back to home page!</a></button>
</body>
</html>

<style>
.background {
 background-color: #cccccc;
 }
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






  








