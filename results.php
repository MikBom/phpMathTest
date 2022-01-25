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
<style>
	table {
	
	width: 50%;
	color: #434a48;
	font-family: monospace;
	font-size: 15px;
	text-align: left;
	border: 1px solid #434a48;
	}
	th {
	background-color: #434a48;
	color: white;
	border: 1px solid #434a48;
	}
	td {
		border: 1px solid #434a48;
	}
	tr:nth-child(even) {background: #CCC}
	tr:nth-child(odd) {background: #FFF}
</style>
</head>
<body>

<div style="margin-left: 20px;">
	<h1>Results</h1>
	</div>
	<hr>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home page</a></li>
	  <li class="active"><a href="logout.php">Log out</a></li>
    </ul>
  </div>
</nav>

<div style="margin-left: 20px">
	<h3>Here are the results for the class</h3>
	<div style="margin-left: 20px;">
		<table>
		<tr>
		<th>Student id</th>
		<th>First name</th>
		<th>Last name</th>
		<th>Total points</th>
		<th>Grade</th>
		</tr>
		
  		<br>
			<?php>
		
		$servername = "127.0.0.1:50018";
		$username = "azure";
		$password = "6#vWHD_$";
		$dbname = "math";
  // Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
		
			$sql = "SELECT STUDENT1.studentid, STUDENT1.F_name, STUDENT1.L_name, EXAM.points, EXAM.grade FROM EXAM INNER JOIN STUDENT1 ON EXAM.studentid = STUDENT1.studentid";
				$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>". $row["studentid"]. "</td><td>" . $row["F_name"]. "</td><td>" . $row["L_name"]. "</td><td>" . $row["points"]. "</td><td>" . $row["grade"]. "</td></tr>";
				  }
				  echo "</table>";
				} else {
				  echo "0 results";
				}
			$conn->close();
			?>
	</div>
	</div>


<footer style="position: fixed; bottom: 0; width: 100%;" class="page-footer font-small">
  <div style="background-color: #333; color: white; text-align: center;">
 <div>© Math test by Mikko Boman 2005542
    </div></div>
  
</footer>



</body>
</html>