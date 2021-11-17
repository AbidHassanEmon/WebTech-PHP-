<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FormAction</title>
</head>
<body>

<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "etwo";

	$connection = new mysqli($servername, $username, $password, $dbname);

	if ($connection->connect_error) {
		die("Connection failed: " . $connection->connect_error);
	}

		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$Gender=$_POST['gender'];
		$DOB=$_POST['birthday'];
		$Religion=$_POST['RELIGION'];
		$Preadd=$_POST['present'];
		$PerAdd=$_POST['permanent'];
		$Email=$_POST['email'];
		$Phone=$_POST['phone'];
		$Web=$_POST['Website'];
		$user=$_POST['uname'];
		$pass=$_POST['pass'];
		

		if (empty($firstname)or empty($lastname)  or empty($Gender) or empty($DOB) or empty($Religion) or empty($Email) or empty($user) 
			or empty($pass))
		{
			$isValid = false;	
		}
		else 
		{
			$isValid = true;
		}

            function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
			
			if ($isValid) {
 			$firstname = sanitize($firstname);
			$lastname = sanitize($lastname);
			$Gender = sanitize($Gender);
		    $DOB = sanitize($DOB);
		    $Religion = sanitize($Religion);
		    $Email = sanitize($Email);
		}

     
		 
	if ($isValid) {

		$sql = "INSERT INTO user1 (fname,lname,gender,DOB,religion,presentadd,permanentadd,phone,email,website,username,password) VALUES ('$firstname','$lastname','$Gender','$DOB','$Religion','$Preadd','$PerAdd','$Phone','$Email','$Web','$user','$pass')";

		if ($connection->query($sql) === TRUE) 
		  {
  			echo "New record created successfully";
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
	
	<br><br>
	<hr>
	<a href="login.php">LOG IN </a> | <a href="RegForm.php">Registration </a>
	
</body>
</html>