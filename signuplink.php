<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$username=$_POST['username'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	
	
$sql="INSERT INTO user(username,emailid,password,phoneno)
	VALUES('$username', '$email', '$password','$mobile')";
		if($result = mysqli_query($con,$sql))
	{
		mysqli_close($con);
		header('Location:signin.php?var=1');
	} 
	
	else 
	{
		header('Location:set.php?var=fail');
	}


?>
