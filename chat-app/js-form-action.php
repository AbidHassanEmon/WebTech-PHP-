<?php 

$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "etwo";

	$connection = new mysqli($servername, $username, $password, $dbname);

	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}



	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$uname = $_POST["username"];
		$Email = $_POST["email"];
		$pass=$_POST["Password"];
	}



	if (empty($uname)or  empty($Email) or empty($pass))
		{
			$isValid = false;	
		}
		else 
		{
			$isValid = true;
		}



    if ($isValid) {

		$sql = "INSERT INTO user (email,username,password) VALUES ('$Email','$uname','$pass')";

		if ($connection->query($sql) === TRUE) 
		  {
  			echo "New user created successfully";
		  }
		 else 
		   {
  			echo "Error: " . $sql . "<br>" . $connection->error;
		   }

		}

	else{
			echo "Fill the Form Correctly......";
		}	


		$connection->close();       
?>
<html>
<body>
	<br><br>
	<hr>
	<a href="login.php">LOG IN </a> | <a href="Regform.php">Registration </a>
	
</body>
</html>