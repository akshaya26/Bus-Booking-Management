<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$st=$_POST['name'];
	


    if(empty($st)){
		header('Location:stndel.php');
	}
	
	
	else{
		$x="select name from stn where name='$st'";
		$y=mysqli_query($con,$x);
		$resultCheck=mysqli_num_rows($y);
		if($resultCheck<1){
	        header('Location:stndel2.php?station=notexisting');
			exit();
		}else 
		{   $z="DELETE FROM stn WHERE name='$st'";
	        mysqli_query($con,$z);
			header('Location:stndel1.php?deletion=success');
			
            exit();
		}
	}


?>
