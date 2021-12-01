<!DOCTYPE html>
<html>
<head>
  <style>
    #message {
      color: red;
    }
  </style>
  <script src="login.js"></script>
</head>
<body>

<h1>Log In</h1>
<br>
<br>
<form name="login" action="loginaction.php" method="POST" onsubmit="return isValid(this);">

<label for="uname">User name:</label>
  <input type="text" id="uname" name="uname"><br><br>
  
  <label for pass="pass">Password: </label>
  <input type="password" name="pass"><br><br>
  <br><p id="message"></p><br>
  <input type="submit" value="Submit"><br><br>
  <hr>
  
</form>
<br>

Not Yet Registred!<a href="Regform.php">Click here</a> for registeration.

</body>
</html>
