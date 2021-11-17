<?php
session_start(); 
if(count($_SESSION)===0)
{
	header("location:login.php");
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

<p><h2>Welcome,<?php echo $_SESSION['username'] ?> </h2></p>

<a href="Logout.php">LOGOUT</a>

</body>
</html>