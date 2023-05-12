<?php
	


	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$busid=$_POST['busid'];
	$busname=$_POST['bname'];
	$type=$_POST['type'];
	$sou=$_POST['src'];
	$dest=$_POST['dest'];
	
$sql="INSERT INTO bus VALUES('$busid', '$busname', '$type','$sou','$dest')";
		if($result = mysqli_query($con,$sql))
	{
		mysqli_close($con);
		header('Location:busadd1.php?var=success');
		 
	} 
	
	else 
	{
		header('Location:busadd2.php?var=fail');
	}


?>
