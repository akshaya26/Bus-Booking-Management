<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$busid=$_POST['busid'];
	


    if(empty($busid)){
		header('Location:busdel.php');
	}
	
	
	else{
		$x="select busid from bus where busid='$busid'";
		$y=mysqli_query($con,$x);
		$resultCheck=mysqli_num_rows($y);
		if($resultCheck<1){
	        header('Location:busdel2.php?busid=notexisting');
			exit();
		}else 
		{   $z="DELETE FROM bus WHERE busid='$busid'";
			header('Location:busdel1.php?editphp=success');
			mysqli_query($con,$z);
            exit();
		}
	}


?>
