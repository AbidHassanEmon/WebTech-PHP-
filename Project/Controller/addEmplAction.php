<?php

	if ($_SERVER["REQUEST_METHOD"] === "POST") {

		$decode = json_decode($_POST["obj"], false);
//var_dump($decode);
		$id=$decode->id;
		$fname = $decode->fname;
		$lname = $decode->lname;
		$Gender=$decode->gen;
		$DOB=$decode->birthday;
		$Email=$decode->email;
		$add=$decode->address;
		$Phone=$decode->phone;
		$user=$decode->uname;
		$pass=$decode->pass;

//var_dump($add);
//var_dump($Phone);
		
	if (empty($fname)or empty($lname) or empty($Gender) or empty($DOB) or empty($Email) or empty($user) or empty($pass)) {
			echo "Please fill up the form properly";
	}

	else 
	{
		//echo "OOOOOOOOOk";
		
			$conn = new mysqli("localhost", "root", "", "etwo");

			/*$sql="INSERT INTO medi (ID,Name,Price,stock) VALUES ('$id','$name','$price','$stock') ON DUPLICATE KEY UPDATE 
			ID='$id',Name='$name',Price='$price',stock='$stock'";*/

			$sql="INSERT INTO empl (ID,fname,lname,gender,DOB,address,phone,email,username,password) VALUES ('$id','$fname','$lname','$Gender','$DOB','$add','$Phone','$Email','$user','$pass') ON DUPLICATE KEY UPDATE  ID='$id',fname='$fname',lname='$lname',gender='$Gender',DOB='$DOB',address='$add',phone='$Phone',email='$Email',username='$user',password='$pass'";

			$result = $conn->query($sql);
			if($result)
			{
				
			echo "Employee Saved Succssfully";
			}
			else
			{
				echo "Employee Saved UNSuccssfully";

			}
		
	}	

}

?>
