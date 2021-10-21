<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Beneficiary</title>
</head>
<body>

<h1><b>PAGE2(ADD Beneficiary):</b></h1>  <br>

<h3><b>Degital Wallet</b></h3><br>


<a href="Home.php">1.HOME</a> 
<a href="AddBeni.php">2.ADD Beneficiary</a>
<a href="history.php">3.Tansaction History</a>

<br>

<h3><b>Add Beneficiary:</b></h3><br>
<form Action="AddBeniAction.php" method="POST">
	
	
		<label for="name">Name</label>
		<input type="text" id="name" name="name">
	
	<br><br>
		<label for="mobile">ID</label>
		<input type="text" id="mobile" name="mobile">
	
	<br><br>

	<input type="submit" name="Submit" value="Submit">
	<br><br>

</form>	

<table border="1" >
	<tr>
	  <td> Name :</td><td>Mobile :</td>
	</tr>


	<?php
	$handle=fopen("Beneficiary.json","r");
	$data=fread($handle,filesize("Beneficiary.json"));
	
	$explode=explode("\n",$data);
	array_pop($explode);
	
	$arr1=array();
	for($i=0;$i<count($explode);$i++)
	{
		$json=json_decode($explode[$i]);
		array_push($arr1,$json);
	}
	
	for($j=0;$j<count($arr1);$j++)
	{
	echo "<tr>";
	echo "<td>".$arr1[$j]->name."</td>";
	echo "<td>".$arr1[$j]->mobile."</td>";
	echo "</td>";
	echo "</tr>";
	}
	
	?>

</body>
</html>
