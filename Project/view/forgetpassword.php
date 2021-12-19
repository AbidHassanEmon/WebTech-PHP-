<!DOCTYPE html>
<html>
<head>
	<title>Forget Password</title>
	<link rel="stylesheet" href="forget_style.css">
	<!--<style>
		#msg{
			color: red;
		}
	</style>-->
	<script src="../controller/forgetpassword.js">
		
	</script>
</head>

<body>
<div class="container">
<h1 class="label">Forget password</h1>

<P>&emsp;&emsp;&emsp; <a href="../view/login.php"> <i> <b> <button>LOG IN </button></b> </i></a> </P>


<form class="login_form"name="formData" id="f1" action="../controller/forgetAction.php" method="post" onsubmit="sendData(this); return false;">

<div class="font">Enter User Name</div>
 <input type="text" id="uname" name="uname"><br><br>


<div class="font">Enter Your Birthday</div>
<input type="date" id="birthday" name="birthday"><br><br>

<div class="font">Enter Your Email</div>
<input type="email" id="email" name="email"><br><br>


<div class="font">Enter New Password</div>
<input type="password" id="npass"name="npass"><br><br>


<div class="font">Retype new Password</div>
<input type="password" id="nnpass" name="nnpass">

<p id="msg"></p>

<button type="submit">UPDATE</button>

</form>

<P>&emsp;&emsp;&emsp; <a href="../view/login.php"> <i> <b> <button>LOG IN </button> </b> </i></a> </P>	

<br><br>	
</body>
</html>