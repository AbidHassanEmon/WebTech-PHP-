<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body>

<h1><b>PAGE 3 [TRANSACTION HISTORY ]</b></h1>  <br>

<h3><b>Degital Wallet</b></h3><br>


<a href="Home.php">1.HOME</a> 
<a href="AddBeni.php">2.ADD Beneficiary</a>
<a href="History.php">3.Tansaction History</a>

<br><br><br>

<label>From:</label>
  <input type="date" id="from" name="from">
<label>To:</label>
  <input type="date" id="To" name="To"> 

	<input type="submit" name="Submit" value="Submit">
	<br><br>

</form>	

<br>
<h3> <b> Total Records :</b> </h3>

<table border="1" >
	<tr>
	  <td> Category </td><td>To</td><td>Amount </td><td>Transfer On</td>
	</tr>


	<?php
	$handle=fopen("History.json","r");
	$data=fread($handle,filesize("History.json"));
	
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
	echo "<td>".$arr1[$j]->category."</td>";
	echo "<td>".$arr1[$j]->mobile."</td>";
	echo "<td>".$arr1[$j]->amount."</td>";
	echo "<td>".$arr1[$j]->date."</td>";
	echo "</td>";
	echo "</tr>";
	}
	
	?>
