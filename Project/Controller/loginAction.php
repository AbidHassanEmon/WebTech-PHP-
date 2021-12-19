<?php 
	
	if ($_SERVER["REQUEST_METHOD"] === "POST") {

error_reporting(E_ALL ^ E_WARNING); //remove warning of unused $id

		$decode = json_decode($_POST["obj"], false);

		$uname = $decode->uname;
		$pass = $decode->pass;
		$ch=$decode->ch;
		//var_dump($ch);

		if (empty($uname) or empty($pass)) {
			echo "Please fill up the form properly";
		}
		else {
			$servername = "localhost";
			$usernam = "root";
			$passwor = "";
			$dbname = "etwo";

			$connection = new mysqli($servername, $usernam, $passwor, $dbname);

			if ($connection->connect_error) {
			die("Connection failed: " . $connection->connect_error);
			}
	
			//echo "get data";

			$sql = "SELECT * FROM user1 WHERE username = ? and password = ?";
			$stmt = $connection->prepare($sql);
			$stmt->bind_param("ss", $username, $password);
			$username = $uname;
			$password = $pass;
			$response = $stmt->execute();

			if ($response) {
				$data = $stmt->get_result();
		
				$row = $data->fetch_assoc();
				$id=$row['ID'];

				if ($data->num_rows == 1) {

					if($ch)   
   						{  

   							setcookie ("uname",$uname,time()+ (10 * 365 * 24 * 60 * 60),"/");  
    						setcookie ("pass",$pass,time()+ (10 * 365 * 24 * 60 * 60),"/");
   							 
   						}  
   					else  
   					{  
   							
    					if(isset($_COOKIE["uname"]))   
    						{  
     							setcookie ("uname","",time()- (10 * 365 * 24 * 60 * 60),"/");  
    						}  
    					if(isset($_COOKIE["pass"]))   
    					{  
     						setcookie ("pass","",time()- (10 * 365 * 24 * 60 * 60),"/");  
    					}  
  					}  
					
					session_start();
					$_SESSION['username']=$username;
					$_SESSION['ID']=$id;
					echo"logedin";
					//header("Location: ../view/home.php");
					
			
				}
				else
				{
					echo"LOG IN INVALID";
				}
		}


	}
}
?>