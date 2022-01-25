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
<html lang="en">
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Math Test</title>
</head>
<body>

<div style="margin-left: 20px;">
	<h1>Start of the math test</h1>
	</div>
	<hr>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="results.php">Results</a></li>
	  <li class="active"><a href="logout.php">Log out</a></li>
    </ul>
  </div>
</nav>
<div style="margin-left: 20px">
 <div class="text-center">
	<h2>Start here</h2>
	<div style="margin-left: 20px;">
	<h1>Add your informations.</h1>
		<form action="signin.php" method="post">
			First name:  <br>
			<input type="text" name="fname">
			<br>
			Last name: <br> 
			<input type="text" name="lname">
			<br>
			Student id:<br>
			<input type="text" name="id">
			<br>
		<br>
			<input type="submit" value="Sign in">
  		<br>
	</div>
</div>
	</div>
</div>

<footer style="position: fixed; bottom: 0; width: 100%;" class="page-footer font-small">
  <div style="background-color: #333; color: white; text-align: center;">
 <div>© Math test by Mikko Boman 2005542
    </div></div>
  
</footer>



</body>
</html>