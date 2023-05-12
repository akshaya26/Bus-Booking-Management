<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");
echo "jojo";
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$src=$_POST['src'];
	$dest=$_POST['dest'];
	$type=$_POST['type'];
	$fare=$_POST['rate'];
	
	
$sql="INSERT INTO fare VALUES('$src', '$dest', '$type','$fare')";
		if($result = mysqli_query($con,$sql))
	{
		mysqli_close($con);
		header('Location:fareadd1.php?var=success');
	} 
	
	else 
	{
		header('Location:fareadd2.php?var=fail');
	}


?>
