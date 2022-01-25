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
	<h2>Units. 20 points.</h2>
	<p>After answering to questions please submit answers from end of questionnaire.</p>
	<div style="margin-left: 20px;">

		<form action="questions2.php" method="post">
		<br>
		<br>
		<h3>Change to milligrams</h3>
		(1.)&nbsp;&nbsp;	925 micrograms =
  		<input type="text" name="a1">
		<br>
		(2.)&nbsp;&nbsp;	200 micrograms =
  		<input type="text" name="a2">
		<br>
		(3.)&nbsp;&nbsp;	1386 micrograms =
  		<input type="text" name="a3">
		<br>
		(4.)&nbsp;&nbsp;	500 micrograms =
  		<input type="text" name="a4">
		<br>
		
		
		<h3>Change to grams</h3>
		(1.)&nbsp;&nbsp;	7260 mg =
  		<input type="text" name="b1">
		<br>
		(2.)&nbsp;&nbsp;	80 mg =
  		<input type="text" name="b2">
		<br>
		(3.)&nbsp;&nbsp;	135 mg =
  		<input type="text" name="b3">
		<br>
		(4.)&nbsp;&nbsp;	1250 mg =
  		<input type="text" name="b4">
		<br>
		
		
		<h3>Change to Milliliters</h3>
		(1.)&nbsp;&nbsp;	4.5 L =
  		<input type="text" name="c1">
		<br>
		(2.)&nbsp;&nbsp;	0.9 L =
  		<input type="text" name="c2">
		<br>
		(3.)&nbsp;&nbsp;	8.5 L =
  		<input type="text" name="c3">
		<br>
		(4.)&nbsp;&nbsp;	2.2 L =
  		<input type="text" name="c4">
		<br>
		
		<h3>Change to Liters</h3>
		(1.)&nbsp;&nbsp;	70 ml =
  		<input type="text" name="d1">
		<br>
		(2.)&nbsp;&nbsp;	725 ml =
  		<input type="text" name="d2">
		<br>
		(3.)&nbsp;&nbsp;	1575 ml =
  		<input type="text" name="d3">
		<br>
		(4.)&nbsp;&nbsp;	3300 ml =
  		<input type="text" name="d4">
		<br>
		
		<h3>Change to micrometer</h3>
		(1.)&nbsp;&nbsp;	128 mm =
  		<input type="text" name="e1">
		<br>
		(2.)&nbsp;&nbsp;	32 mm =
  		<input type="text" name="e2">
		<br>
		(3.)&nbsp;&nbsp;	3.55 mm =
  		<input type="text" name="e3">
		<br>
		(4.)&nbsp;&nbsp;	22.45 mm =
  		<input type="text" name="e4">

		<input type="hidden" name="foo" value="<?php echo $var;?>" />

		
		<br>
		<br>
		<input type="submit" value="Return answers for second chapter">
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

		
		$studentid = $_POST['student'];
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
		$d = $_POST['d'];
		$e = $_POST['e'];
		$f = $_POST['f'];
		$g = $_POST['g'];
		$h = $_POST['h'];
		$i = $_POST['i'];
		$j = $_POST['j'];
		
		$pisteet = 0;
		
		if ($a == "87") {
			$pisteet = $pisteet + 1;
			}
		if ($b == "-66") {
			$pisteet = $pisteet + 1;
			}
		if ($c == "-3") {
			$pisteet = $pisteet + 1;
			}
		if ($d == "-80") {
			$pisteet = $pisteet + 1;
			}
		if ($e == "193.4" OR $e == "193,4") {
			$pisteet = $pisteet + 1;
			}
		if ($f == "678.975" OR $f == "678,975") {
			$pisteet = $pisteet + 1;
			}
		if ($g == "409.55") {
			$pisteet = $pisteet + 1;
			}
		if ($h == "499") {
			$pisteet = $pisteet + 1;
			}
		if ($i == "456") {
			$pisteet = $pisteet + 1;
			}
		if ($j == "876300") {
			$pisteet = $pisteet + 1;
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

			//$sql = "INSERT INTO student1 (studentid, F_name, L_name)
				//VALUES ('$id', '$fname', '$lname')";
				
				
				
				$sql = 	"INSERT INTO exam (examid, pointsbasic)
				VALUES ('1', '$pisteet')";

			if ($conn->query($sql) === TRUE) {
				
				echo "New record created successfully";
				} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			
		
			
			$conn->close();*/

?>
<input type="hidden" name="pisteet" value="<?php echo $pisteet;?>" />
<input type="hidden" name="student" value="<?php echo $studentid;?>" />
</body>
</html>


