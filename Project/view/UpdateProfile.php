<?php

     session_start(); 
        if(count($_SESSION)===0)
           {
           header("location:../view/login.php");
            }
    $id=$_SESSION['ID'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "etwo";

   $connection = new mysqli($servername, $username, $password, $dbname);

  if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }

  $sql = "SELECT * FROM user1 WHERE ID=$id";

  $data = $connection->query($sql);

  $row = $data->fetch_assoc();


?>


<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="Updateprofile_style.css">
 <!--<style>
    #message,#message1,#message2{
      color: red;
    }
    
  </style> -->
  <script src="../controller/updateForm.js"></script>
</head>


<body>
<div class="container">
<h1 class="label"><u>UPDATE PROFILE</u></h1>

<P style="padding-left: 50px;"> <a href="profile.php"> <i> <b> Profile </b> </i></a> </P>
<br>
<P style="padding-left: 50px;"> <a href="home.php"> <i> <b> HOME </b> </i></a> </P>
<br>
<form class="login_form" name="formData" id="f1" action="../controller/updateAction.php" method="post" onsubmit="sendData(this); return false;">

  <div class="font">First Name</div>
  <input type="text" id="fname" name="fname" value="<?php echo $row["fname"]; ?>"><br><br>
  <div class="font">Last Name</div>
  <input type="text" id="lname" name="lname" value="<?php echo $row["lname"];?>"><br><br>
  
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
  <input type="date" id="birthday" name="birthday" value="<?php echo $row["DOB"];?>"><br><br>

  
  <div class="font">phone</div>
  <input type="tel" id="phone" name="phone" value="<?php echo $row["phone"];?> "><br><br>

  <div class="font">Email</div>
  <input type="email" id="email" name="email" value="<?php echo $row["email"];?>" ><br><br>

  
  <div class="font">ADDRESS</div>
  <input id="add" name="add" value="<?php echo $row["presentadd"];?>" > <br><br>
  
  <p id="message2"></p>
  
  <button type="submit">UPDATE PROFILE</button>
</form>

<br><br><br>
</div>

</body>
</html>