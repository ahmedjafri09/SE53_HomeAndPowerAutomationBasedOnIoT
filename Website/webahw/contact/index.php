<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$conn = mysqli_connect("localhost", "root", "", "prj") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO tblcontact (user_name, user_email,subject,content) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $content. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
	//}
}
require_once "contact-view.php";
?>

<br>
<br>
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
  
  
</style>
<button class="button" type="button"><a href="http://localhost/webahw/indexx.php"  style="text-decoration: none;">Go back to home page!</a></button>
</html>
  
