<?php
	


	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$busid=$_POST['busid'];
	$st=$_POST['station'];
	$time=$_POST['time'];
	
	
$sql="INSERT INTO route VALUES('$busid', '$st', '$time')";
		if($result = mysqli_query($con,$sql))
	{
		mysqli_close($con);
		header('Location:routeadd1.php?var=success');
		 
	} 
	
	else 
	{
		header('Location:routeadd2.php?var=fail');
	}


?>
