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
	<h2>Expressions / Simplify/  Division & Multiplication (by 10,100,1000). 10 Points.</h2>
	<div style="margin-left: 20px;">
	<h3>Expressions</h3>
		<form action="questions4.php" method="post">
		
	
			<br>
		
		<br>(1.)&nbsp;&nbsp;	X + 45 = 35 	What is X?	= <br>
  		<input type="text" name="g1">
		<br>
		<br>(2.)&nbsp;&nbsp;	X - 526 = 445 	What is X?	=<br>
  		<input type="text" name="g2">
		<br>
		<br>(3.)&nbsp;&nbsp;	If X = 5 then 	2X+3-X	 =<br>
  		<input type="text" name="g3">
		<br>
		
		<h3>Simplify<br></h3>
		(1.)&nbsp;&nbsp;	275 / 400	= 
  		<input type="text" name="h1">
		<br>
		(2.)&nbsp;&nbsp;	60 / 375	=
  		<input type="text" name="h2">
		<br>
		(3.)&nbsp;&nbsp;	125 / 300	=
  		<input type="text" name="h3">
		<br>
		
		<h3>Division & Multiplication<br></h3>
		(1.)&nbsp;&nbsp;	8.25 / 1000	= 
  		<input type="text" name="i1">
		<br>
		(2.)&nbsp;&nbsp;	6.26 X 100	=
  		<input type="text" name="i2">
		<br>
		(3.)&nbsp;&nbsp;	3.87 X 10	=
  		<input type="text" name="i3">
		<br>
		(4.)&nbsp;&nbsp;	2.29 / 100	=
  		<input type="text" name="i4">
		<br>
		<br>
		
			<input type="submit" value="Return answers for fourth chapter">
  		<br><br><br>
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
		$pisteet1 = $_POST['pisteet1'];
		$studentid = $_POST['student'];
		
		$f1 = $_POST['f1'];
		$f2 = $_POST['f2'];
		$f3 = $_POST['f3'];
		$f4 = $_POST['f4'];
		$f5 = $_POST['f5'];
		$f6 = $_POST['f6'];
		$f7 = $_POST['f7'];
		$f8 = $_POST['f8'];
		$f9 = $_POST['f9'];
		$f10 = $_POST['f10'];
		
		$pisteet2 = 0;
		
		//Percentage
		if ($f1 == "250") {
			$pisteet2 = $pisteet2 + 1;
			}		
		if ($f2 == "1410") {
			$pisteet2 = $pisteet2 + 1;
			}
		if ($f3 == "3750") {
			$pisteet2 = $pisteet2 + 1;
			}
		if ($f4 == "7360") {
			$pisteet2 = $pisteet2 + 1;
			}
		if ($f5 == "165") {
			$pisteet2 = $pisteet2 + 1;
			}		
		if ($f6 == "770") {
			$pisteet2 = $pisteet2 + 1;
			}		
		if ($f7 == "2016") {
			$pisteet2 = $pisteet2 + 1;
			}	

		if ($f8 == "60") {
			$pisteet2 = $pisteet2 + 1;
			}		
		if ($f9 == "30") {
			$pisteet2 = $pisteet2 + 1;
			}		
		if ($f10 == "65") {
			$pisteet2 = $pisteet2 + 1;
			}

		
		/*$servername = "127.0.0.1:50018";
		$username = "azure";
		$password = "6#vWHD_$";
		$dbname = "math";
  // Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
		
			
			$sql = "INSERT INTO exam (examid, pointspercentage, studentid)
				VALUES ('1', '$pisteet2', '2')";
				
			//	$sql = 	"INSERT INTO exam (studentid, points, grade, teacherid)
			//	VALUES ('$id', '$kaikkipisteet', '$arvosana', 1)";

			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
				} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();*/
			?>
<input type="hidden" name="pisteet2" value="<?php echo $pisteet2;?>" />
<input type="hidden" name="pisteet1" value="<?php echo $pisteet1;?>" />
<input type="hidden" name="pisteet" value="<?php echo $pisteet;?>" />
<input type="hidden" name="student" value="<?php echo $studentid;?>" />

</body>
</html>