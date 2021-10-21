<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FormAction</title>
</head>
<body>
<a href="Home.php">Back</a>
<?php


         $category = $_POST['category'];
		 $mobile = $_POST['mobile'];
		 $amount = $_POST['amount'];

      if (empty($category)or empty($mobile)  or empty($amount) or $amount<=0 )
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
 			$category = sanitize($category);
			$mobile = sanitize($mobile);
			$amount= sanitize($amount);
			
			}
		
		
?>
<?php

          
		 if ($isValid) {
			$handle1 = fopen("History.json", "a");
			$arr1 = array('category' => $category, 'mobile' => $mobile , 'amount'=>$amount, 'date'=> date("y-m-d"));
			$encode = json_encode($arr1);

			$res = fwrite($handle1, $encode . "\n");
		
		 }
		if ($res) {
			echo "Fund transfer successully.";
			
		}
		else {
			echo "Error Fund transfer.";

		}

	?>	

</body>
</html>