<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$user=$_POST['username'];
	$msg=$_POST['msg'];
	
	
$sql="INSERT INTO contact VALUES('$user','$msg')";
		if($result = mysqli_query($con,$sql))
	{
		mysqli_close($con);
		header('Location:set.php?var=success');
	} 
	
	else 
	{
		header('Location:set.php?var=fail');
	}


?>
