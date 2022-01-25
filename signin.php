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
	<h2>Basic calculations. 10 points.</h2>
	<p>After answering to questions please submit answers from end of questionnaire.
	<div style="margin-left: 20px; margin-top:10px;">
		<form action="questions1.php" method="post">
		<br>

		<br>
		<br>(1.)&nbsp;&nbsp; 98 - 56 + 45=  <br>
		<input type="text" name="a">
		<br>
		<br>(2.)&nbsp;&nbsp;	376 - 678 + 236 = <br> 
  		<input type="text" name="b">
  		<br>
		<br>(3.)&nbsp;&nbsp;	6 X 7-9 X 5 = <br>
  		<input type="text" name="c">
		<br>
		<br>(4.)&nbsp;&nbsp;	56 X 5 + 23 X 9 - 567  = <br> 
  		<input type="text" name="d">
		<br>
		<br>(5.)&nbsp;&nbsp;	5.6 X 34 + 21 / 7 =  <br>
  		<input type="text" name="e">
		<br>
		<br>(6.)&nbsp;&nbsp;	123.45 X 5.5 = <br>
  		<input type="text" name="f">
		<br>		
		<br>(7.)&nbsp;&nbsp;	3276.45 / 8 = <br>
  		<input type="text" name="g">
		<br>
		<br>(8.)&nbsp;&nbsp;	748.5 / 1.5 = <br>
  		<input type="text" name="h">
		<br>
		<br>(9.)&nbsp;&nbsp;	45600 / 100 = <br>
  		<input type="text" name="i">
		<br>
		<br>(10.)&nbsp;&nbsp;	8763 X 100 = <br>
  		<input type="text" name="j">
		<br>
		<br>
		<input type="submit" value="Return answers for first chapter">
  		<br>
	</div>
</div>
	
  		<br>
	</div>
</div>
	</div>
</div>
			
<footer style="position: fixed; bottom: 0; width: 100%;" class="page-footer font-small">
  <div style="background-color: #333; color: white; text-align: center;">
 <div>© Math test 
    </div></div>

</footer>

	<?php>
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$id = $_POST['id'];

		
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

			$sql = "INSERT INTO student1 (studentid, F_name, L_name)
				VALUES ('$id', '$fname', '$lname')";
				
			//	$sql = 	"INSERT INTO exam (studentid, points, grade, teacherid)
			//	VALUES ('$id', '$kaikkipisteet', '$arvosana', 1)";

			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
				} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close(); 
			?>
<input type="hidden" name="student" value="<?php echo $id;?>" />

</body>
</html>


