<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$busid=$_POST['busid'];
	$bname=$_POST['bname'];
	$type=$_POST['type'];
	$sou=$_POST['src'];
	$dest=$_POST['dest'];
	
	if(empty($busid)){
		header('Location:busedit.php?busid=empty');
	}
	
	
	else{
		$x="select busid from bus where busid='$busid'";
		$y=mysqli_query($con,$x);
		$resultCheck=mysqli_num_rows($y);
		if($resultCheck<1){
	        header('Location:busedit3.php?busid=notexisting');
			exit();
		}
		
		else if( empty($bname) && empty($sou) && empty($type) && empty($dest) )
		{
			header('Location:busedit2.php?editphp=error');
			mysqli_query($con,$z);
            exit();
		}	
        else if( empty($sou) && empty($type) && empty($dest) )
		{   $z="update bus set bname='$bname' where busid='$busid'";
		    mysqli_query($con,$z);
			header('Location:busedit1.php?editphp=success');
		    exit();
		}	
		 else if( empty($bname) &&  empty($type) && empty($dest) )
		{   $z="update bus set src='$sou' where busid='$busid'";
		    mysqli_query($con,$z);
			header('Location:busedit1.php?editphp=success');
		    exit();
		}	
		 else if( empty($bname) &&  empty($sou) &&  empty($dest) )
		{   $z="update bus set type='$type' where busid='$busid'";
		    mysqli_query($con,$z);
			header('Location:busedit1.php?editphp=success');
		    exit();
		}	
		 else if( empty($bname) &&  empty($sou) && empty($type) )
		{   $z="update bus set dest='$dest' where busid='$busid'";
		    mysqli_query($con,$z);
			header('Location:busedit1.php?editphp=success');
		    exit();
		}	
        
        else if( empty($dest) &&  empty($sou)  )
		{   $z="update bus set bname='$bname', type='$type' where busid='$busid'";
		    mysqli_query($con,$z);
			header('Location:busedit1.php?editphp=success');
		    exit();
		}	
       else if( empty($dest) &&  empty($type)  )
		{   $z="update bus set bname='$bname', src='$sou' where busid='$busid'";
		    mysqli_query($con,$z);
			header('Location:busedit1.php?editphp=success');
		    exit();
		}	
		else if( empty($type) &&  empty($sou)  )
		{   $z="update bus set bname='$bname', dest='$dest' where busid='$busid'";
		    mysqli_query($con,$z);
			header('Location:busedit1.php?editphp=success');
		    exit();
		}	
		else if( empty($bname) &&  empty($dest)  )
		{   $z="update bus set type='$type', src='$src' where busid='$busid'";
		    mysqli_query($con,$z);
			header('Location:busedit1.php?editphp=success');
		    exit();
		}	
		else if( empty($bname) &&  empty($sou)  )
		{   $z="update bus set type='$type', dest='$dest' where busid='$busid'";
		    mysqli_query($con,$z);
			header('Location:busedit1.php?editphp=success');
		    exit();
		}
		else if( empty($bname) &&  empty($type)  )
		{   $z="update bus set src='$sou', dest='$dest' where busid='$busid'";
		    mysqli_query($con,$z);
			header('Location:busedit1.php?editphp=success');
		    exit();
		}	
		 else if(  empty($bname)  )
		{   $z="update bus set type='$type' ,src='$sou',dest='$dest' where busid='$busid'";
		    mysqli_query($con,$z);
			header('Location:busedit1.php?editphp=success');
		    exit();	
			}	
		else if(  empty($type)  )
		{  $z="update bus set bname='$bname' ,src='$sou',dest='$dest' where busid='$busid'";
		    mysqli_query($con,$z);
			header('Location:busedit1.php?editphp=success');
		    exit();	
			}	
        else if(  empty($sou)  )
		{   $z="update bus set bname='$bname' ,type='$type',dest='$dest' where busid='$busid'";
			mysqli_query($con,$z);
			header('Location:busedit1.php?editphp=success');
		    exit();	
		}				
		else if(  empty($dest)  )
		{   $z="update bus set bname='$bname' ,type='$type',src='$sou' where busid='$busid'";
		    mysqli_query($con,$z);
			header('Location:busedit1.php?editphp=success');
		    exit();	
			}
		else 
		{   $z="update bus set bname='$bname' ,type='$type',src='$sou',dest='$dest' where busid='$busid'";
		    mysqli_query($con,$z);
			header('Location:busedit1.php?editphp=success');
		    exit();	
			}
	}
	

?>
