<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FormAction</title>
</head>
<body>

<?php 

		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$Gender=$_POST['gender'];
		$DOB=$_POST['birthday'];
		$Religion=$_POST['RELIGION'];
		$Email=$_POST['email'];
		$Preadd=$_POST['present'];
		$PerAdd=$_POST['permanent'];
		$Phone=$_POST['phone'];
		$Web=$_POST['Website'];
		$username=$_POST['uname'];
		$password=$_POST['pass'];
		
		if (empty($firstname)or empty($lastname) or empty($username)or empty($password) or empty($Gender) or empty($DOB) or empty($Religion) or empty($Email))
		{
	
			$isValid = false;	
		}
		else 
		{
			$isValid = true;
		}
	?>	
		
		
<?php
            function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
			
			if ($isValid) {
 			$firstname = sanitize($firstname);
			$lastname = sanitize($lastname);
			$Gender = sanitize($Gender);
		    $DOB = sanitize($DOB);
		    $Religion = sanitize($Religion);
		    $Email = sanitize($Email);
		}
		
		
    ?>
	
<?php

          
		 if ($isValid) {
			$handle1 = fopen("data.json", "a");
			$arr1 = array('firstname' => $firstname, 'lastname' => $lastname,'gender'=>$Gender,'dob'=>$DOB,'religion'=>$Religion ,
			'email'=>$Email ,'preadd'=>$Preadd,'perAdd'=>$PerAdd ,'phone'=>$Phone,'Web'=>$Web,'username'=>$username,'password'=>$password);
			$encode = json_encode($arr1);

			$res = fwrite($handle1, $encode . "\n");
		
		 }
		if ($res) {
			echo "Information saved successully.";
		}
		else {
			echo "Error while saving.";
		}
	?>	
	
	<br><br>
	<hr>
	<a href="login.php">LOG IN </a> | <a href="RegForm.html">Registration </a>
	
</body>
</html>