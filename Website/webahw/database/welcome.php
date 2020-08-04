<?php
session_start();
if(isset($_SESSION['log']))
{
?>


<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<h1>Welcome sir</h1>
<a href="" >logout</a>
</body>
</html>
<?php
}
else
{
	echo "please fill proper details";
	header("refresh:2;url=indexx.php");
}

?>