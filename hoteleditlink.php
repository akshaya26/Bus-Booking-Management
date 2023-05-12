<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$hotelid=$_POST['hotelid'];
	$st=$_POST['station'];
	$hname=$_POST['name'];
	$lan=$_POST['landmark'];
	$dis=$_POST['distance'];
	$cntct=$_POST['contactno'];
	
	
	
	if(empty($hotelid)){
		header('Location:hoteledit.php?hotelid=empty');
	}
	
	
	else{
		$x="select hotelid from hotel where hotelid='$hotelid'";
		$y=mysqli_query($con,$x);
		$resultCheck=mysqli_num_rows($y);
		if($resultCheck<1){
	        header('Location:hoteledit3.php?hotelid=notexisting');
			exit();
		}
		
		else if( empty($st) && empty($hname) && empty($lan) && empty($dis) && empty($cntct) )
		{
			header('Location:hoteledit2.php?editphp=error');
			mysqli_query($con,$z);
            exit();
		}	
        else if( empty($hname) && empty($lan) && empty($dis) && empty($cntct) )
		{   $z="update hotel set station='$st' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}	
         else if(empty($st) &&  empty($lan) && empty($dis) && empty($cntct) )
		{   $z="update hotel set name='$hname' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}	
        else if( empty($st) && empty($hname) && empty($dis) && empty($cntct) )
		{   $z="update hotel set landmark='$lan' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}	
          else if( empty($st) && empty($hname) && empty($lan) && empty($cntct) )
		{   $z="update hotel set distance='$dis' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
         else if(  empty($st) && empty($hname) && empty($lan) && empty($dis) )
		{   $z="update hotel set contactno='$cntct' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}	
         else if( empty($cntct) && empty($lan) && empty($dis) )
		{   $z="update hotel set station='$st', name='$hname' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}	
         else if( empty($hname) && empty($cntct) && empty($dis) )
		{   $z="update hotel set station='$st', landmark='$lan' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}	
        else if( empty($hname) && empty($lan) && empty($cntct) )
		{    $z="update hotel set station='$st', distance='$dis' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
        else if( empty($hname) && empty($lan) && empty($dis) )
		{    $z="update hotel set station='$st', contactno='$cntct' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
        else if( empty($st) && empty($lan) && empty($cntct) )
		{    $z="update hotel set name='$hname', distance='$dis' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else if( empty($st) && empty($dis) && empty($cntct) )
		{    $z="update hotel set name='$hname', landmark='$lan' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else if( empty($st) && empty($lan) && empty($dis) )
		{    $z="update hotel set name='$hname', contactno='$cntct' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else if( empty($st) && empty($hname) && empty($dis) )
		{    $z="update hotel set landmark='$lan', contactno='$cntct' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else if( empty($st) && empty($hname) && empty($cntct) )
		{    $z="update hotel set landmark='$lan', distance='$dis' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else if( empty($st) && empty($hname) && empty($lan) )
		{    $z="update hotel set distance='$dis', contactno='$cntct' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		 else if(  empty($st) && empty($hname) )
		{   $z="update hotel set landmark='$lan',distance='$dis' ,contactno='$cntct'where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else if(  empty($st) && empty($lan) )
		{   $z="update hotel set name='$hname',distance='$dis' ,contactno='$cntct'where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else if(  empty($st) && empty($dis) )
		{   $z="update hotel set landmark='$lan',hname='$hname' ,contactno='$cntct'where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else if(  empty($st) && empty($cntct) )
		{   $z="update hotel set landmark='$lan',hname='$hname' ,distance='$dis'where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else if(  empty($hname) && empty($lan) )
		{   $z="update hotel set station='$st',distance='$dis' ,contactno='$cntct'where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else if(  empty($hname) && empty($dis) )
		{   $z="update hotel set station='$st',landmark='$lan' ,contactno='$cntct'where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else if(  empty($hname) && empty($cntct) )
		{   $z="update hotel set station='$st',distance='$dis' ,landmark='$lan'where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else if(  empty($lan) && empty($cntct) )
		{   $z="update hotel set station='$st',distance='$dis' ,name='$hname'where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
         
		else if(  empty($lan) && empty($dis) )
		{   $z="update hotel set station='$st',contactno='$cntct' ,name='$hname'where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		} 
		else if(  empty($cntct) && empty($dis) )
		{   $z="update hotel set station='$st',landmark='$lan' ,name='$hname'where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		} 
		else if(  empty($st) )
		{   $z="update hotel set  contactno='$cntct' , distance='$dis',landmark='$lan' ,name='$hname'where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else if(  empty($hname) )
		{   $z="update hotel set  contactno='$cntct', distance='$dis',landmark='$lan' ,station='$st'where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else if(  empty($lan) )
		{   $z="update hotel set  contactno='$cntct', distance='$dis',station='$st' ,name='$hname'where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else if(  empty($dis) )
		{   $z="update hotel set  contactno='$cntct' ,station='$st',landmark='$lan' ,name='$hname'where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else if(  empty($cntct) )
		{   $z="update hotel set  station='$st', distance='$dis',landmark='$lan' ,name='$hname' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		else 
		{   $z="update hotel set  station='$st', distance='$dis',landmark='$lan' ,name='$hname',contactno='$cntct' where hotelid='$hotelid'";
		    mysqli_query($con,$z);
			header('Location:hoteledit1.php?editphp=success');
		    exit();
		}
		
	}
	
/*$sql="UPDATE `hotel` SET `station`='$sts',`name`='$hname',`landmark`='$lan',`distance`='$dis',`contactno`='$cntct' WHERE ID='$id';";
		if($result = mysqli_query($con,$sql))
	{
		mysqli_close($con);
		header('Location:admin.php?var=1');
	} 
	
	else 
	{
		header('Location:set.php?var=fail');
	}
*/

?>
