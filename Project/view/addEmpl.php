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

<link rel="stylesheet" href="addEmpl_style.css">
  <!--<style>
    #message {
      color: red;
    }
  </style>-->

</head>

<body>

<div class="split left">
<h1>ADD Employee</h1>

<P> <a href="../view/home.php">  <button type="button">Home</button>  </a> </P>

<form name="addEmpl" id="f1">

  <input type="text" id="mId" name="mId" style="display: none;">

  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>

  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  
  <label for="gender"> GENDER:</label><br>
  <input type="radio" id="gender" name="gender" value="MALE"> MALE<br>
  <input type="radio" id="gender" name="gender" value="FEMALE">FEMALE<br><br>
  
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday"><br><br>

  <label for="present address">ADDRESS:</label>
  <textarea id="address" name="address"></textarea>
  <br><br>

  <label for="phone">Phone:</label>
  <input type="tel" id="phone" name="phone"><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>

  <label for="uname">User name:</label>
  <input type="text" id="uname" name="uname"><br><br>
  
  <label for pass="pass">Password: </label>
  <input type="Password" id="pass" name="pass"><br>
  <p id="message"></p>
  <input type="submit" id="btnadd" value="SAVE">

 </form>
</div>

<div class="split right">

<h1>MANAGE Employee</h1>

<P style="text-align: right;"> <a href="../view/logout.php"><button type="button">Log Out</button> </a> </P>

<table border="1">
  <thead>
    
    <th>ID</th>
    <th>First Name</th><th>last Name</th><th>Gender</th><th>Birthday</th>   
    <th>Address</th><th>Phone</th><th>Email</th>
    <th>user name</th>
    <th>Password</th><th>Action/option</th>
  </thead>
  
  <tbody  id="tby">

</tbody>
</div>
<script src="../controller/addEmpl.js"></script>
  
</body>
</html>
