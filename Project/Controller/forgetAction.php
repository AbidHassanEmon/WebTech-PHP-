<?php 
	
	if ($_SERVER["REQUEST_METHOD"] === "POST") {

		$decode = json_decode($_POST["obj"], false);

		//var_dump($decode);
      $DOB=$decode->birthday;
      $Email=$decode->email;
      $username=$decode->uname;
      $npassword=$decode->npass;
      $npassword1=$decode->nnpass;

		if (empty($npassword) or empty($npassword1)) {
			echo "Please fill up the form properly";
		}
		else {
			
		$conn = new mysqli("localhost", "root", "", "etwo");
      $sql="UPDATE user1 SET password='$npassword' WHERE email='$Email' AND username='$username'";

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
	}
?>