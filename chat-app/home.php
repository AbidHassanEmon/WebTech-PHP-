<?php
session_start(); 
if(count($_SESSION)===0)
{
	header("location:login.php");
}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "etwo";

	$connection = new mysqli($servername, $username, $password, $dbname);

	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LogAction</title>
</head>
<body>
<h1>HOME PAGE</h1>

<p><h2>Welcome,<?php echo $_SESSION['username'] ?> </h2></p> <br>

<p> See massage for you:</p>
<br>
<?php
$useer=$_SESSION['username'];
$sql = "SELECT * FROM massage WHERE sendto='$useer'";
	$data = $connection->query($sql);

	if ($data->num_rows > 0) {
		while ($row = $data->fetch_assoc()) {
			echo "Name:" . $row["sendfrom"];
			echo "  send you  ";
			echo "Massage:" . $row["massage"];
			echo "<br>";
		}
	}
	

		
?>


<p>Send Massage: </p>
<br>
<form  action="sendaction.php" method="POST" >
	<label for="uname">Send To:</label>
  <input type="text" id="uname" name="uname"><br><br>
	<label for="mass">massage:</label>
  <input type="textarea" id="mass" name="mass"><br><br>
<input type="submit" value="Send"><br><br>
</form>




<hr>
<a href="Logout.php">LOGOUT</a>

</body>
</html>