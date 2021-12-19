<?php

     session_start(); 
        if(count($_SESSION)===0)
           {
	         header("location:../view/login.php");
            }
    
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="profile_style.css">
</head>
<body>
	<div class="container1">
	<p id="a1"> <h1> <b><u><i> Veiw Profile</i> </u></b> </h1> </p><br>
	<br> 
	<P> <a href="../view/home.php"> <i> <b> Home </b> </i></a> </P>
<br>

	<p> <a href="Logout.php">LOGOUT</a></p>
	<br><br>

	<div class="label">

<?php
	$id=$_SESSION['ID'];
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "etwo";

   $connection = new mysqli($servername, $username, $password, $dbname);

  if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }

  $sql = "SELECT * FROM user1 WHERE ID=$id";

  $data = $connection->query($sql);

if ($data->num_rows > 0) {
	$row = $data->fetch_assoc();

		echo "First Name: " . $row["fname"];
		echo "<br><br>";

		echo "Last Name: " . $row["lname"];
		echo "<br><br>";

		echo "Gender: " . $row["gender"];
		echo "<br><br>";

		echo "Birth Date: " . $row["DOB"];
		echo "<br><br>";

		echo "ADDRESS: " .$row["presentadd"];
		echo "<br><br>";

		echo "Phone: " .$row["phone"];
		echo "<br><br>";

		echo "Email: " .$row["email"];
		echo "<br><br>";


}
	
?>

</div>
<P> <a href="../view/UpdateProfile.php">Update Profile</a> </P>
</div>
</body>
</html>