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
	<link rel="stylesheet" href="changepass_style.css">

	<title>Change Password</title>
	
	<script src="../controller/changepassword.js"></script>
</head>

<body>

	

<div class="container1">


<P id="lg"> <a href="../view/logout.php"><button type="button" style="background-color:#ff1a1a;"> Log Out</button> </a> </P>

<h1 class="label">Change Password</h1>
<P id="lg1" style="padding-left: 40px;"> <a href="../view/home.php">  HOME  </a> </P>

	<form class="ch_form" id="f1" action="../controller/changeAction.php" method="post" onsubmit="sendData(this); return false;">

		<div class="font">Password</div> 
		<input type="text" name="pass">
		<div class="font font2">New password</div>
		<input type="text" name="npass">
		
		<div class="font font2">Retype New password</div>
		<input type="text" name="nnpass">
		
		<p id="msg"></p>
		<button type="submit">Change</button>


	</form>
</div>

</body>
</html>