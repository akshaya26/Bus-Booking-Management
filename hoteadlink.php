<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$hotelid=$_POST['hotelid'];
	$hname=$_POST['name'];
	$sts=$_POST['station'];
	$dis=$_POST['distance'];
	$lan=$_POST['landmark'];
	$cntct=$_POST['contactno'];
	
$sql="INSERT INTO hotel VALUES('$hotelid','$sts','$hname','$lan','$dis','$cntct')";
		if($result = mysqli_query($con,$sql))
	{
		mysqli_close($con);
		header('Location:hoteladd.php?var=success');
	} 
	
	else 
	{
		header('Location:hoteladd.php?var=fail');
	}


?>
