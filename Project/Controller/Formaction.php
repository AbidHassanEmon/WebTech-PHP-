<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FormAction</title>
</head>
<body>

<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {

$decode = json_decode($_POST["obj"], false);

		$fname = $decode->fname;
		$lname = $decode->lname;
		$Gender=$decode->gen;
		$DOB=$decode->birthday;
		
		$Email=$decode->email;
		$add=$decode->address;
		$Phone=$decode->phone;
		
		$user=$decode->uname;
		$pass=$decode->pass;
		
		
		if (empty($fname)or empty($lname) or empty($Gender) or empty($DOB) or empty($Email) or empty($user) or empty($pass)) {
			echo "Please fill up the form properly";
		}
		else {
		
			$conn = new mysqli("localhost", "root", "", "etwo");
			$sql="INSERT INTO user1 (fname,lname,gender,DOB,presentadd,phone,email,username,password) VALUES ('$fname','$lname','$Gender',
				'$DOB','$add','$Phone','$Email','$user','$pass')";
			$result = $conn->query($sql);
			if($result)
			{
				
			echo "Data Saved Succssfully";
			}
			else
			{
				echo "Data Saved UNSuccssfully";

			}
			
		}
	}


	?>		
</body>
</html>