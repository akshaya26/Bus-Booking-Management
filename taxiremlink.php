<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$standid=$_POST['standid'];
	
 if(empty($standid)){
		header('Location:taxidel.php');
	}
	
	
	else{
		$x="select standid from taxistand where standid='$standid'";
		$y=mysqli_query($con,$x);
		$resultCheck=mysqli_num_rows($y);
		if($resultCheck<1){
	        header('Location:taxidel2.php?atmid=notexisting');
			exit();
		}else 
		{   $z="DELETE FROM taxistand WHERE standid='$standid'";
			header('Location:taxidel1.php?editphp=success');
			mysqli_query($con,$z);
            exit();
		}
	}

?>
