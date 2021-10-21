<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body>

<h1><b>PAGE1(HOME)</b></h1>  <br>

<h3><b>Degital Wallet</b></h3><br>


<a href="Home.php">1.HOME</a> 
<a href="AddBeni.php">2.ADD Beneficiary</a>
<a href="history.php">3.Tansaction History</a>

<br>

<h3><b>Fund transfer :</b></h3><br>

<form Action="HomeAction.php" method="POST">
	
<label > Select Category: </label>
  <select id="category" name="category">
    <option value="send money">send money</option>
    <option value="recharge">mobile recharge</option>   
  </select>
  <br><br>


<label > TO: </label>
  <select id="mobile" name="mobile">
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
	
	echo "<option value=". $arr1[$j]->mobile. ">".$arr1[$j]->mobile . "</option>";
	echo "</td>";
	
	}

	?>
  </select>
  <br><br>

<label for="amount">Amount</label>
<input type="text" id="amount" name="amount">
<br><br>

<input type="submit" name="Submit" value="Submit">
<br><br>
</form>


</body>
</html>