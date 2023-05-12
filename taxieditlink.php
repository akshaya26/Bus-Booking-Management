<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$standid=$_POST['standid'];
	$st=$_POST['station'];
	$dis=$_POST['distance'];
	$lan=$_POST['landmark'];
	
	if(empty($standid)){
		header('Location:taxiedit.php?standid=empty');
	}
	
	
	else{
		$x="select standid from taxistand where standid='$standid'";
		$y=mysqli_query($con,$x);
		$resultCheck=mysqli_num_rows($y);
		if($resultCheck<1){
	        header('Location:taxiedit3.php?standid=notexisting');
			exit();
		}
		
		else if( empty($st) && empty($dis) && empty($lan) )
		{
			header('Location:taxiedit2.php?editphp=error');
			mysqli_query($con,$z);
            exit();
		}	
        else if(  empty($lan) && empty($dis) )
		{   $z="update taxistand set station='$st' where standid='$standid'";
		    mysqli_query($con,$z);
			header('Location:taxiedit1.php?editphp=success');
		    exit();
		}	
         else if( empty($st) && empty($lan)  )
		{   $z="update taxistand set distance='$dis' where standid='$standid'";
		    mysqli_query($con,$z);
			header('Location:taxiedit1.php?editphp=success');
		    exit();
		}	
        else if( empty($st)  && empty($dis) )
		{   $z="update taxistand set landmark='$lan' where standid='$standid'";
		    mysqli_query($con,$z);
			header('Location:taxiedit1.php?editphp=success');
		    exit();
		}	
          
         else if(  empty($st)  )
		{   $z="update taxistand set  distance='$dis',landmark='$lan' where standid='$standid'";
		    mysqli_query($con,$z);
			header('Location:taxiedit1.php?editphp=success');
		    exit();	
			}	
		else if(  empty($lan)  )
		{   $z="update taxistand set station='$st' ,distance='$dis' where standid='$standid'";
		    mysqli_query($con,$z);
			header('Location:taxiedit1.php?editphp=success');
		    exit();	
			}	
        				
		else if(  empty($dis)  )
		{   $z="update taxistand set  station='$st',landmark='$lan' where standid='$standid'";
		    mysqli_query($con,$z);
			header('Location:taxiedit1.php?editphp=success');
		    exit();	
			}
        else 
		{   $z="update taxistand set  distance='$dis',station='$st',landmark='$lan' where standid='$standid'";
		    mysqli_query($con,$z);
			header('Location:taxiedit1.php?editphp=success');
		    exit();	
			}			
	}
	
	
	

?>
