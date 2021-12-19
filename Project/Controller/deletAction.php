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

			$sql="DELETE FROM medi where ID=$id";
			$result = $conn->query($sql);

			if($result)
			{
				
			echo "Medicine Delete Succssfully";
			}
			else
			{
				echo "Medicine Delete UNSuccssfully";

			}
			
	}	

}

?>
