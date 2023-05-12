<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$hotelid=$_POST['hotelid'];
	
 if(empty($hotelid)){
		header('Location:hoteldel.php');
	}
	
	
	else{
		$x="select hotelid from hotel where hotelid='$hotelid'";
		$y=mysqli_query($con,$x);
		$resultCheck=mysqli_num_rows($y);
		if($resultCheck<1){
	        header('Location:hoteldel2.php?hotelid=notexisting');
			exit();
		}else 
		{   $z="DELETE FROM hotel WHERE hotelid='$hotelid'";
			header('Location:hoteldel1.php?editphp=success');
			mysqli_query($con,$z);
            exit();
		}
	}


?>
