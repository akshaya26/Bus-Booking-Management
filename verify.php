<?php

	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	
	$sql="SELECT  * FROM admin WHERE username = '".$_POST['username']."'  and password = '".$_POST['password']."' ";
	$result = mysqli_query($con,$sql);
	$rowcount=mysqli_num_rows($result);
	$name = $_POST['username'];
	$pass = $_POST['password'];
	if($rowcount == 1) 
	{
		header('Location:newadmin.php?var='.$name);
		session_start();
			$_SESSION['name'] =$_POST['username'];
			$_SESSION['pass'] =$_POST['password'];
			
	}
	
	else
	{
		$sql="SELECT  * FROM user WHERE username = '".$_POST['username']."'  and password = '".$_POST['password']."' ";
		$result = mysqli_query($con,$sql);
		$rowcount=mysqli_num_rows($result);
		$name = $_POST['username'];
		$pass = $_POST['password'];
		if($rowcount == 1) 
		{
			header('Location:userlogged.php?var='.$name);
			session_start();
			$_SESSION['name'] =$_POST['username'];
			$_SESSION['pass'] = $_POST['password'];
			//echo $_SESSION['user'];
		}
		
		else 
		{
			header('Location:signin.php?var=fail');
		}
	
	}
?>
