<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<style>
		#message {
			color: red;
		}
	</style>
	<script src="external.js"></script>
</head>
<body>

	<h1>JS Form Validation</h1>

	<form name="Regform" action="js-form-action.php" method="post" onsubmit="return isValid(this);"> 
		<label for="username">User Name:</label>
		<input type="text" name="username" id="username">
		<br><br>
		<label for="lastname">Email:</label>
		<input type="text" name="email" id="email">
		<br><br>
	<label for="lastname">Password:</label>
		<input type="text" name="Password" id="Password">
		<br><p id="message"></p><br>


		<input type="submit" value="Submit">
		<br><br>
	</form>
	<hr>
	<a href="login.php">LOG IN </a> | <a href="Regform.php">Registration </a>
</body>
</html>