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

<link rel="stylesheet" href="addMedi_style.css">
  <!--<style>
    #message {
      color: red;
    }
  </style>-->

</head>

<body>

<div class="split left">
<P> <a href="../view/home.php">  <b><button type="button">Home</button> </b> </a> </P>
<h1>ADD MEDICINE</h1>
<br>
<form name="addmedi" id="f1">

  <input type="text" id="mId" name="mId" style="display: none;">

  <label for="name">Medicine Name  :</label><br>
  <input type="text" id="name" name="name"><br><br>

  <label for="lname">Price      :</label><br>
  <input type="text" id="price" name="price"><br><br>

  <label for="lname">Stock      :</label><br>
  <input type="text" id="stock" name="stock"><br><br>

<p id="message"></p>
<br>
 <input type="submit" id="btnadd" value="SAVE">

</form>
</div>

<div class="split right">

<P style="text-align: right; padding-right: 280px;"> <a href="../view/logout.php">
  <b><button type="button" style="background-color: red;">Log Out</button> </b> </a> </P>

<h1>MANAGE MEDICINE</h1>


<table border="1">
  <thead>
    
    <th>ID</th>
    <th>Medecine Name</th>   
    <th>Price</th>
    <th>Stock</th>
    <th>Action</th>
  </thead>
  
  <tbody  id="tby">

  </tbody>
</div>
  <script src="../controller/addmedi.js"></script>
  
</body>
</html>