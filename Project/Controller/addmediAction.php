<?php

	if ($_SERVER["REQUEST_METHOD"] === "POST") {

		$decode = json_decode($_POST["obj"], false);
//var_dump($decode);
		$id=$decode->id;
		$name = $decode->name;
		$price = $decode->price;
		$stock = $decode->stock;

	if (empty($name) or empty($price)or empty($stock) )
		{
			echo "Please fill up the form properly";	
		}
	else 
	{
		//echo "OOOOOOOOOk";
		
			$conn = new mysqli("localhost", "root", "", "etwo");
			$sql="INSERT INTO medi (ID,Name,Price,stock) VALUES ('$id','$name','$price','$stock') ON DUPLICATE KEY UPDATE 
			ID='$id',Name='$name',Price='$price',stock='$stock'";

			$result = $conn->query($sql);
			if($result)
			{
				
			echo "Medicine Saved Succssfully";
			}
			else
			{
				echo "Medicine Saved UNSuccssfully";

			}
			
	}	

}

?>
