<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	
	
$sql="SELECT seatno FROM seat where busid='2' AND userid='3'";
$result=$con->query($sql);
		if($result = mysqli_query($con,$sql))
	{
		mysqli_close($con);
		header('Location:seat.php?$var=$result');
	} 
	
	else 
	{
		header('Location:set.php?var=fail');
	}


?>
