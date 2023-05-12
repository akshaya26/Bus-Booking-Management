<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	
	$st=$_POST['name'];
	$code=$_POST['stncode'];
	
$sql="INSERT INTO stn VALUES('$st','$code')";
		if($result = mysqli_query($con,$sql))
	{
		mysqli_close($con);
		header('Location:stnadd1.php?var=success');
	} 
	
	else 
	{
		header('Location:stnadd.php?var=fail');
	}


?>
