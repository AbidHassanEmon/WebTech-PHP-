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
	<title>Home</title>
	<link rel="stylesheet" href="home_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<h1>HOME PAGE</h1>
<div class="split left">
<p><h2>Welcome,<?php echo $_SESSION['username'] ?> </h2></p>

<a href="../view/profile.php"><button type="button">View Profile</button></a><br>
<br><br>
<a href="../view/changepassword.php"><button type="button">Change Password</button> </a><br>

<br><br>

<a href="../view/addEmpl.php"><button type="button">Manage Employee</button> </a> <br>

<br><br>

<a href="../view/Addmedi.php"><button type="button">Manage Medicine</button></a><br>

<br><br>

<a href="Logout.php"><button type="button" style="background-color:#ff1a1a;">LOGOUT</button></a>

</div>
<div class="split right">
<h1>HOME PAGE</h1>
<button id="btn2">Click to view order List</button>
<button id="btn1">Hide</button>
<p id="i3"></p>

<script src="../controller/viewbill.js"></script>


</div>

</body>
</html>