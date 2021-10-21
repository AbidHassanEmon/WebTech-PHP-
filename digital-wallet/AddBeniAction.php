<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FormAction</title>
</head>
<body>
<a href="AddBeni.php">Back</a>
<?php


         $name = $_POST['name'];
		 $mobile = $_POST['mobile'];

      if (empty($name)or empty($mobile))
        {
	
			$isValid = false;	
		}
		else 
		{
			$isValid = true;
		}
?>

<?php
            function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
			
			if ($isValid) 
			{
 			$name = sanitize($name);
			$mobile = sanitize($mobile);
			
			}
		
		
?>
<?php

          
		 if ($isValid) {
			$handle1 = fopen("Beneficiary.json", "a");
			$arr1 = array('name' => $name, 'mobile' => $mobile);
			$encode = json_encode($arr1);

			$res = fwrite($handle1, $encode . "\n");
		
		 }
		if ($res) {
			echo "Information saved successully.";
			
		}
		else {
			echo "Error while saving.";

		}

	?>	


</body>
</html>