<?php 
	session_start();
	$id=$_SESSION['ID'];


	if ($_SERVER["REQUEST_METHOD"] === "POST") {

		$decode = json_decode($_POST["obj"], false);
//var_dump($decode);
		$pass = $decode->pass;
		$npass = $decode->npass;
		$nnpass = $decode->nnpass;

		if (empty($pass) or empty($npass)or empty($nnpass) ) {
			echo "Please fill up the form properly";   //empty
		}

		else if ($npass===$nnpass) 
		{
			//echo "ook    id=".$id;
			$conn = new mysqli("localhost", "root", "", "etwo");
      		$sql="UPDATE user1 SET password='$npass' WHERE ID='$id'";

        	$result = $conn->query($sql);

        	if($result)
         	{
            
         		echo "Password Changed Succssfully";
         	}
         	else
         	{
            	echo "Password Changed UNSuccssfully";

         	}

		}

		else 
		{	//two new pass not match
			echo "New password does not match";
		}
	}
?>