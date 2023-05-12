<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$atmid=$_POST['atmid'];
	


    if(empty($atmid)){
		header('Location:atmdel.php');
	}
	
	
	else{
		$x="select atmid from atm where atmid='$atmid'";
		$y=mysqli_query($con,$x);
		$resultCheck=mysqli_num_rows($y);
		if($resultCheck<1){
	        header('Location:atmdel2.php?atmid=notexisting');
			exit();
		}else 
		{   $z="DELETE FROM atm WHERE atmid='$atmid'";
			header('Location:atmdel1.php?editphp=success');
			mysqli_query($con,$z);
            exit();
		}
	}


?>
