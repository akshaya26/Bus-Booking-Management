<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$sou=$_POST['src'];
	$type=$_POST['type'];
	$dest=$_POST['dest'];
	$r1=$_POST['rate1'];
	$r2=$_POST['rate2'];
	
$sql="UPDATE fare SET rate='$r2' WHERE src='$sou' AND type='$type' AND dest='$dest' AND rate='$r1'";
		if($result = mysqli_query($con,$sql))
	{
		mysqli_close($con);
		header('Location:fareedit1.php?var=success');
	} 
	
	else 
	{
		header('Location:fareedit2.php?var=fail');
	}


?>
