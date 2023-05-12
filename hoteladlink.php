<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$hotelid=$_POST['id'];
	$st=$_POST['station'];
	$hname=$_POST['name'];
	$lan=$_POST['landmark'];
	$dis=$_POST['distance'];
	$cntct=$_POST['contactno'];
	
$sql="INSERT INTO hotel VALUES('$hotelid','$st','$hname','$lan','$dis','$cntct')";
		if($result = mysqli_query($con,$sql))
	{
		mysqli_close($con);
		header('Location:hoteladd1.php?var=success');
	} 
	
	else 
	{
		header('Location:hoteladd2.php?var=fail');
	}


?>
