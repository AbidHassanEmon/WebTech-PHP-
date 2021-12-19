<?php

	if ($_SERVER["REQUEST_METHOD"] === "POST") {

		$decode = json_decode($_POST["obj"], false);

//var_dump($decode);

		$id = $decode->ID;
//var_dump($id);	

	$conn = new mysqli("localhost", "root", "", "etwo");
	$result = $conn->query("select * from empl where ID='$id'");
	$arr1 = array();

	if ($result->num_rows===1) {
		while($row = $result->fetch_assoc()) {
			$arr1[]=$row;
		}
		echo json_encode($arr1);
	}
}

?>
