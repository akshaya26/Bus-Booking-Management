<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$atmid=$_POST['atmid'];
	$sts=$_POST['station'];
	$bank=$_POST['bank'];
	$lan=$_POST['landmark'];
	$dis=$_POST['distance'];
	
$sql="INSERT INTO atm VALUES('$atmid','$sts', '$bank', '$lan','$dis')";
		if($result = mysqli_query($con,$sql))
	{
		mysqli_close($con);
		header('Location:atmadd1.php?var=success');
	} 
	
	else 
	{
		header('Location:atmadd2.php?var=fail');
	}


?>
