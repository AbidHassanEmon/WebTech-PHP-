<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="RegForm_style.css">
 <!--<style>
    #message,#message1,#message2{
      color: red;
    }
    
  </style> -->
  <script src="../controller/Regform.js"></script>
</head>


<body>
<div class="container">
<h1 class="label">Registration Form(Admin)</h1>
<P>&emsp;&emsp;&emsp; <a href="../view/login.php"> <i> <b> LOG IN </b> </i></a> </P>
<form class="login_form" name="formData" id="f1" action="../controller/Formaction.php" method="post" onsubmit="sendData(this); return false;">

<p id="message"></p>


  <div class="font">First Name</div>
  <input type="text" id="fname" name="fname"><br><br>
  <div class="font">Last Name</div>
  <input type="text" id="lname" name="lname"><br><br>
  
  <div class="font">GENDER</div><br>
 
  <label class="btn">Male
  <input type="radio" id="gender" name="gender" value="MALE">
  <span class="check"></span>
  </label>

  <label class="btn">Female
  <input type="radio" id="gender1" name="gender" value="FEMALE">
  <span class="check"></span>
  </label>

  <div class="font">Birthday</div>
  <input type="date" id="birthday" name="birthday"><br><br>

  <p id="message1"></p>
  
  <div class="font">phone</div>
  <input type="tel" id="phone" name="phone"><br><br>

  <div class="font">Email</div>
  <input type="email" id="email" name="email"><br><br>

  
  <div class="font">ADDRESS</div>
  <textarea id="add" name="add" >
  </textarea><br><br>
  
  <div class="font">User Name</div>
  <input type="text" id="uname" name="uname"><br><br>
  
  <div class="font">Password</div>
  <input type="password" name="pass" id="pass">
  <br>
  <p id="message2"></p>
  
  <button type="submit">Add Member</button>
</form>
<P>&emsp;&emsp;&emsp; <a href="../view/login.php"> <i> <b> LOG IN </b> </i></a> </P>
<br><br><br>
</div>

</body>
</html>