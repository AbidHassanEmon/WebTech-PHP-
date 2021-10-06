<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FormAction</title>
</head>
<body>
<h2>Basic Information:</h2>
<?php 

		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$Gender=$_POST['gender'];
		$DOB=$_POST['birthday'];
		$Religion=$_POST['RELIGION'];
		
		
		if (empty($firstname) or empty($lastname) or empty($Gender) or empty($DOB)or empty($Religion)){
			echo "Please fill up the form properly";
		}
		else {
			echo "First Name: " . sanitize($firstname);
				echo "<br>";
				echo "Last Name: " . sanitize($lastname);
				echo "<br>";
				echo "Gender: " . sanitize($Gender);
				echo "<br>";
				echo "Birth Date: " . sanitize($DOB);
				echo "<br>";
				echo "RELIGION: " . sanitize($Religion);
				echo "<br>";
		}

	?>
	
<h2>contract Information:</h2>

<?php 

		echo "PRESENT ADDRESS: " . $_POST['present'];
				echo "<br>";
				
		echo "Permanent ADDRESS: " . $_POST['permanent'];
			echo "<br>";
			
       echo "Phone: " .$_POST['Phone'];
			echo "<br>";
			
		$Email=$_POST['email'];
		
		if(empty($Email)){
			echo "Please fill up the form properly";
		}
		else {
			echo "Email: " . sanitize($Email);
				echo "<br>";
		
		}
		
		
		echo "Website: " . $_POST['Website'];
			echo "<br>";

	?>
	
	
<?php
function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
    ?>
</body>
</html>