
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
	<h1>Roman numbers</h1>
	<div style="margin-left: 20px;">
		<form action="finalpage.php" method="post">


		(1.)&nbsp;&nbsp;	IX	= 
  		<input type="text" name="j1">
		<br>
		(2.)&nbsp;&nbsp;	XXXIX	=
  		<input type="text" name="j2">
		<br>
		(3.)&nbsp;&nbsp;XXII =
  		<input type="text" name="j3">
		<br>
		(4.)&nbsp;&nbsp;	XVI	=
  		<input type="text" name="j4">
		<br>
		(5.)&nbsp;&nbsp;	XLIV	= 
  		<input type="text" name="j5">
		<br>
		(6.)&nbsp;&nbsp;	48	=
  		<input type="text" name="j6">
		<br>
		(7.)&nbsp;&nbsp;	32	=
  		<input type="text" name="j7">
		<br>
		(8.)&nbsp;&nbsp; 20	=
  		<input type="text" name="j8">
		<br>
		(9.)&nbsp;&nbsp;	14 	= 
  		<input type="text" name="j9">
		<br>
		(10.)&nbsp;&nbsp;	19	=
  		<input type="text" name="j10">
		<br>
			<br>
		<br>
		<input type="submit" value="Return answers for fifth and final chapter">
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
		$pisteet1 = $_POST['pisteet1'];
		$pisteet2 = $_POST['pisteet2'];
		$studentid = $_POST['student'];
		
		$g1 = $_POST['g1'];
		$g2 = $_POST['g2'];
		$g3 = $_POST['g3'];
		
		$h1 = $_POST['h1'];
		$h2 = $_POST['h2'];
		$h3 = $_POST['h3'];
		
		$i1 = $_POST['i1'];
		$i2 = $_POST['i2'];
		$i3 = $_POST['i3'];
		$i4 = $_POST['i4'];
		
		$pisteet3 = 0;
		
		//expressions
		if ($g1 == "-10") {
			$pisteet3 = $pisteet3 + 1;
			}		
		if ($g2 == "971") {
			$pisteet3 = $pisteet3 + 1;
			}		
		if ($g3 == "8") {
			$pisteet3 = $pisteet3 + 1;
			}	
			//simplify
		if ($h1 == "11/16") {
			$pisteet3 = $pisteet3 + 1;
			}		
		if ($h2 == "4/25") {
			$pisteet3 = $pisteet3 + 1;
			}		
		if ($h3 == "5/12") {
			$pisteet3 = $pisteet3 + 1;
			}
					//division & multiplication
		if ($i1 == "0.00825") {
			$pisteet3 = $pisteet3 + 1;
			echo "Oikein!<br>";
			}		
		if ($i2 == "626.00" OR $i2 == "626") {
			$pisteet3 = $pisteet3 + 1;
			}		
		if ($i3 == "38.70") {
			$pisteet3 = $pisteet3 + 1;
			}
		if ($i4 == "0.0229") {
			$pisteet3 = $pisteet3 + 1;
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
			
	
			$sql = "INSERT INTO exam (examid, pointsdivision, studentid)
				VALUES ('1', '$pisteet3', 2)";
				
			//	$sql = 	"INSERT INTO exam (studentid, points, grade, teacherid)
			//	VALUES ('$id', '$kaikkipisteet', '$arvosana', 1)";

			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
				} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
			*/
			?>

<input type="hidden" name="pisteet3" value="<?php echo $pisteet3;?>" />
<input type="hidden" name="pisteet2" value="<?php echo $pisteet2;?>" />
<input type="hidden" name="pisteet1" value="<?php echo $pisteet1;?>" />
<input type="hidden" name="pisteet" value="<?php echo $pisteet;?>" />
<input type="hidden" name="student" value="<?php echo $studentid;?>" />

</body>
</html>