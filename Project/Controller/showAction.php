<?php 
	
	$conn = new mysqli("localhost", "root", "", "etwo");
	$result = $conn->query("select * from medi");
	$arr1 = array();

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$arr1[]=$row;
		}
		echo json_encode($arr1);
	}
?>