<?php
$useer=$_SESSION['username'];
$mass = $_POST['mass'];
$to = $_POST['uname'];

$sql = "INSERT INTO massage (sendfrom,massage,sendto) VALUES ('$useer', '$mass', '$to')";

	$res = $connection->query($sql);

	if ($res) {
		header("Location: home.php");
		}
	}
	

		
?>
