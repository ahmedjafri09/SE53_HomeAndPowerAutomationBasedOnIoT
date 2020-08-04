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


.dropbtn {
    background-color: #000080 ;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: black;
    min-width: 200px;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: lightblue;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: grey;}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

</style>

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
   <body>

   <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 
  <a class="navbar-brand" href="indexx.php"><img src="imgs/log.png" alt="logo" style="width: 200px ;height:100px;" /></a>
  
  <div class="dropdown">
<button class="dropbtn">Appliances</button>
<div class="dropdown-content">


<a href="http://localhost/webahw/insertdata.php">Add Appliances </a>
<a href="http://localhost/webahw/delete.php">Delete Appliances</a>
<a href="http://localhost/webahw/consumption.php">Appliances Consuption</a>
<a href="http://localhost/webahw/fetch.php">Display Appliances</a>

</div>
</div>
<style type="style="margin:20px;"></style>
<div class="dropdown">
<button class="dropbtn">Controlling</button>
<div class="dropdown-content">

<a href="http://localhost/webahw/control.php">Control Appliances </a>
<a href="http://localhost/webahw/automate.php">Power Automation</a>


</div>
</div>

<div class="dropdown">
<button class="dropbtn">Account</button>
<div class="dropdown-content">

<a href="http://localhost/webahw/logout.php">Logout</a>


</div>
</div>
</nav>

   <div>
   	<style>
body {
  background-image: url('iot.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
  
<div class="container-fluid">    
    <div class="row">
    
        <div class="col-md-4" >
       <br>
       
    <h2>Add Appliances</h2>
    <br>
    <a href="insertdata.php">
    
    <img src="imgs/add.png" alt="iot" style="width:320px;height:220px;"></a>
    <br>
    <br>
</div>
<div class="col-md-4">

<br>
    <h2>Delete Appliances</h2>
     <br>
     <a href="delete.php">
     
     <img src="imgs/delete.png" alt="iot" style="width:300px;height:200px;"></a>
     <br>
     <br>
    
</div>

<div class="col-md-4">
<br>
    <h2>Appliance Consumptions</h2>
     <br>
     <a href="consumption.php">
    <img src="imgs/consump.png" alt="iot" style="width:300px;height:200px;"></a>
    <br>
    <br>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col-md-4">
        
    <h2>Display Appliances</h2>
     <br>
     <a href="fetch.php">
    <img src="imgs/display.png" alt="display" style="width:300px;height:200px;"></a>
    <br>
    <br>
   </div>
   
   <div class="col-md-4">

    <h2> Control Appliances</h2>
     <br>
     <a href="control.php">
    <img src="imgs/control.png" alt="display" style="width:300px;height:200px;"></a>
    <br>
    <br>
    </div>

    <div class="col-md-4">
    
     <h2>Contact Us</h2>
    <br>
    <a href= "contact/index.php ?">
    <img src="imgs/contact.png" alt="display" style="width:300px;height:200px;"></a>
    <br>
    <br>
      </div>
    
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4">
        
    <h2>Automate Appliances</h2>
     <br>
     <a href ="automate.php">
    <img src="imgs/automate.png" alt="display" style="width:300px;height:200px;"></a>
    <br>

     </div>   
    <div class="col-md-4">
    <h2>Manage Users</h2>
    <br>
    <a href = "loginadmin.php">
     <img src="imgs/user.png" alt="display" style="width:300px;height:200px;"></a>
      <br>
      <br>
      </div>
    
</div>
    
</div>

</div>
</div>
<body>
</html>