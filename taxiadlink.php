<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$standid=$_POST['standid'];
	$st=$_POST['station'];
	$dis=$_POST['distance'];
	$lan=$_POST['landmark'];
	
$sql="INSERT INTO taxistand VALUES('$standid', '$st', '$lan','$dis')";
		if($result = mysqli_query($con,$sql))
	{
		mysqli_close($con);
		header('Location:taxiadd1.php?var=success');
	} 
	
	else 
	{
		header('Location:taxiadd2.php?var=fail');
	}


?>
