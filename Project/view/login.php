<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="login_style.css">
  <style>
    #msg {
      color: red;
    }
  </style>
  <script src="../controller/login.js"></script>
</head>
<body>

<div class="container">

    <h1 class="label">User Login</h1>

<form class="login_form" name="formData" action="../controller/loginAction.php" method="post" onsubmit="sendData(this); return false;">

  <div class="font">User Name</div>
  <input type="text"  name="uname" value="<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>" >
  
  <div class="font font2">Password</div>
  <input type="password" name="pass" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>" >
<br><br>
<input type="checkbox"name="remember" id="re" />
<label for="remember-me">Remember me</label> 
    
  

  <p id="msg"></p>

  <button type="submit">Login</button>
<br><br>
<h3 class="label1">Not Yet Registred!<a href="RegForm.php">Click here</a> for Register</h3>
<br><br>
<h3 class="label1">Forget password?<a href="forgetpassword.php">Click here</a> for Recover</h3>
<br><br>
</form>

</div>


</body>
</html>