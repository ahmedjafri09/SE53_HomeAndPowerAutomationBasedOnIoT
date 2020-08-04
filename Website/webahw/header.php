<!DOCTYPE html>

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
  <!-- Brand -->
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
</body>
</html>

                     
                  </ul>
               </div>
            </div>
         </nav>
      </div>