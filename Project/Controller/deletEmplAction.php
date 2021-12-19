<?php

	if ($_SERVER["REQUEST_METHOD"] === "POST") {

		$decode = json_decode($_POST["obj"], false);

//var_dump($decode);

		$id = $decode->ID;
//var_dump($id);	

	if (empty($id))
		{
			echo "Problem Occourd";	
		}
	else 
	{
		//echo "OOOOOOOOOk";
		
			$conn = new mysqli("localhost", "root", "", "etwo");

			$sql="DELETE FROM empl where ID=$id";
			$result = $conn->query($sql);

			if($result)
			{
				
			echo "Employee Delete Succssfully";
			}
			else
			{
				echo "Employee Delete UNSuccssfully";

			}
			
	}	

}

?>
