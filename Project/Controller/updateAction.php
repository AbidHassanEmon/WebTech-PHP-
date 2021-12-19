<?php
session_start(); 
        if(count($_SESSION)===0)
           {
           header("location:../view/login.php");
            }
    $id=$_SESSION['ID'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>updaeForm</title>
</head>
<body>

<?php 

	if ($_SERVER["REQUEST_METHOD"] === "POST") {

	$id=$_SESSION['ID'];

	$decode = json_decode($_POST["obj"], false);

	//var_dump($decode);
	//var_dump($id);

		$fname = $decode->fname;
		$lname = $decode->lname;
		$Gender=$decode->gen;
		$DOB=$decode->birthday;
		
		$Email=$decode->email;
		$add=$decode->address;
		$Phone=$decode->phone;
		
		
		
		if (empty($fname)or empty($lname) or empty($Gender) or empty($DOB) or empty($Email)) {
			echo "Please fill up the form properly";
		}
		else {

		//echo "OOOOOOOOOk";
			
			$conn = new mysqli("localhost", "root", "", "etwo");

			$sql="UPDATE  user1 SET fname='$fname',lname='$lname',gender='$Gender',DOB='$DOB',presentadd='$add',phone='$Phone',
			email='$Email' Where ID='$id'";

			$result = $conn->query($sql);
			if($result)
			{
				
			echo "Data Update Succssfully";
			}
			else
			{
				echo "Data Update UNSuccssfully";

			}
			
		}
	}


	?>		
</body>
</html>