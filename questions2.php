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
	<h1>Math test</h1>
	</div>
	<hr>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
</nav>

<div style="margin-left: 20px">
 <div class="text-center">
	<h1>Percentage</h1>
	<div style="margin-left: 20px;">
	<h3>What is</h3>
		<form action="questions3.php" method="post">

			<br>
		(1.)&nbsp;&nbsp;	10 % of 2500 =
  		<input type="text" name="f1">
		<br>
		(2.)&nbsp;&nbsp;	30 % of 4700 =
  		<input type="text" name="f2">
		<br>
		(3.)&nbsp;&nbsp;	50 % of 7500 =
  		<input type="text" name="f3">
		<br>
		(4.)&nbsp;&nbsp;	80 % of 9200 =
  		<input type="text" name="f4">
		<br>
		(5.)&nbsp;&nbsp;	15 % of 1100 =
  		<input type="text" name="f5">
		<br>
		(6.)&nbsp;&nbsp;	35 % of 2200 =
  		<input type="text" name="f6">
		<br>
		(7.)&nbsp;&nbsp;	42 % of 4800 =
  		<input type="text" name="f7">
		<br>
		
		<h3>Find the Percentage<br></h3>
		(1.)&nbsp;&nbsp;	1500 ml out of 2500 ml =
  		<input type="text" name="f8">
		<br>
		(2.)&nbsp;&nbsp;	1200 ml out of 4000 ml =
  		<input type="text" name="f9">
		<br>
		(3.)&nbsp;&nbsp;	650 ml out of 1000 ml =
  		<input type="text" name="f10">
		<br>
		<br>
		<input type="submit" value="Return answers for third chapter">
		<br><br><br>	
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

	<?php>
		$pisteet = $_POST['pisteet'];
		$studentid = $_POST['student'];
		
		$a1 = $_POST['a1'];
		$a2 = $_POST['a2'];
		$a3 = $_POST['a3'];
		$a4 = $_POST['a4'];
		
		$b1 = $_POST['b1'];
		$b2 = $_POST['b2'];
		$b3 = $_POST['b3'];
		$b4 = $_POST['b4'];
		
		$c1 = $_POST['c1'];
		$c2 = $_POST['c2'];
		$c3 = $_POST['c3'];
		$c4 = $_POST['c4'];
		
		$d1 = $_POST['d1'];
		$d2 = $_POST['d2'];
		$d3 = $_POST['d3'];
		$d4 = $_POST['d4'];
		
		$e1 = $_POST['e1'];
		$e2 = $_POST['e2'];
		$e3 = $_POST['e3'];
		$e4 = $_POST['e4'];
		
		$pisteet1 = 0;
		//Units change to milligrams
		if ($a1 == "0.925") {
			$pisteet1 = $pisteet1 + 1;
			}
		if ($a2 == "0.2") {
			$pisteet1 = $pisteet1 + 1;
			}
		if ($a3 == "1.386") {
			$pisteet1 = $pisteet1 + 1;
			}
		if ($a4 == "0.5") {
			$pisteet1 = $pisteet1 + 1;
			}
			
			//change to grams
		if ($b1 == "7.26") {
			$pisteet1 = $pisteet1 + 1;
			}
		if ($b2 == "0.08") {
			$pisteet1 = $pisteet1 + 1;
			}
		if ($b3 == "0.135") {
			$pisteet1 = $pisteet1 + 1;
			}
		if ($b4 == "1.25") {
			$pisteet1 = $pisteet1 + 1;
			}	
			
					//change to Milliliters
		if ($c1 == "4500") {
			$pisteet1 = $pisteet1 + 1;
			}
		if ($c2 == "900") {
			$pisteet1 = $pisteet1 + 1;
			}
		if ($c3 == "8500") {
			$pisteet1 = $pisteet1 + 1;
			}
		if ($c4 == "2200") {
			$pisteet1 = $pisteet1 + 1;
			}
			//change to Liters
		if ($d1 == "0.07") {
			$pisteet1 = $pisteet1 + 1;
			}
		if ($d2 == "0.725") {
			$pisteet1 = $pisteet1 + 1;
			}
		if ($d3 == "1.575") {
			$pisteet1 = $pisteet1 + 1;
			}
		if ($d4 == "3.3") {
			$pisteet1 = $pisteet1 + 1;
			}
			
		//change to micrometer
		if ($e1 == "128000") {
			$pisteet1 = $pisteet1 + 1;
			}
		if ($e2 == "32000") {
			$pisteet1 = $pisteet1 + 1;
			}
		if ($e3 == "3550") {
			$pisteet1 = $pisteet1 + 1;
			}
		if ($e4 == "22450") {
			$pisteet1 = $pisteet1 + 1;
			}			

		
	/*	$servername = "127.0.0.1:50018";
		$username = "azure";
		$password = "6#vWHD_$";
		$dbname = "math";
  // Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			
			$sql = "INSERT INTO exam (examid, pointsunits, studentid)
				VALUES ('1', '$pisteet1', '2')";
				
			//	$sql = 	"INSERT INTO exam (studentid, points, grade, teacherid)
			//	VALUES ('$id', '$kaikkipisteet', '$arvosana', 1)";

			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
				} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();*/
			?>
<input type="hidden" name="pisteet1" value="<?php echo $pisteet1;?>" />
<input type="hidden" name="pisteet" value="<?php echo $pisteet;?>" />
<input type="hidden" name="student" value="<?php echo $studentid;?>" />
</body>
</html>