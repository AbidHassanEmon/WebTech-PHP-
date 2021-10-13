
<?php 
		$filename="data.json";
		
        $Username=$_POST['uname'];
		$password=$_POST['pass'];

		$handle=fopen($filename,"r");
		$data=fread($handle,filesize($filename));
		$data=explode("\n",$data);
		
		$isValid = false;
		
		for($i=0;$i<count($data)-1;$i++)
		{
			$json=json_decode($data[$i]);
			if($Username === $json->username and $password === $json->password)
			{
				$isValid = true;
				break;
			}
		}
		
		if ($isValid) {
			header("Location: home.php");
		}
		else {
			echo "Log IN Failed.......";
		}
?>
