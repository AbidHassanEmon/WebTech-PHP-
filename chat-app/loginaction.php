
<?php 

	$user = $_POST['uname'];
	$pass = $_POST['pass'];
         if ( empty($user) or empty($pass))
		{
	
			$isValid = false;	
		}
		else 
		{
			$isValid = true;
		}


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "etwo";

	$connection = new mysqli($servername, $username, $password, $dbname);

	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}

		

	if ($isValid) {
			
	$sql = "SELECT * FROM user WHERE username = ? and password = ?";
	$stmt = $connection->prepare($sql);
	$stmt->bind_param("ss", $username, $password);
	$username = $user;
	$password = $pass;
	$response = $stmt->execute();

	if ($response) {
		$data = $stmt->get_result();

		if ($data->num_rows == 1) {
			session_start();
			$_SESSION['username']=$username;
			header("Location: home.php");
			
		}
		else {
			echo "Log IN Failed.......";
		}

	}
}
		else {
			echo "Empty Username or password";
		}
		

?>
<!DOCTYPE html>
<html>
<body>

<br><br>
<a href="login.php"> <i> <b> LOG IN </b> </i></a>
</body>
</html>