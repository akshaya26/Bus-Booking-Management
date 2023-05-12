<?php
	
	// Create connection
	$con=mysqli_connect("localhost","root","","busbook");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$atmid=$_POST['atmid'];
	$bank=$_POST['bank'];
	$st=$_POST['station'];
	$dis=$_POST['distance'];
	$lan=$_POST['landmark'];
	
	if(empty($atmid)){
		header('Location:atmedit.php?atmid=empty');
	}
	
	
	else{
		$x="select atmid from atm where atmid='$atmid'";
		$y=mysqli_query($con,$x);
		$resultCheck=mysqli_num_rows($y);
		if($resultCheck<1){
	        header('Location:atmedit3.php?atmid=notexisting');
			exit();
		}
		
		else if( empty($st) && empty($bank) && empty($lan) && empty($dis) )
		{
			header('Location:atmedit2.php?editphp=error');
			mysqli_query($con,$z);
            exit();
		}	
        else if( empty($bank) && empty($lan) && empty($dis) )
		{   $z="update atm set station='$st' where atmid='$atmid'";
		    mysqli_query($con,$z);
			header('Location:atmedit1.php?editphp=success');
		    exit();
		}	
         else if( empty($st) && empty($lan) && empty($dis) )
		{   $z="update atm set bank='$bank' where atmid='$atmid'";
		    mysqli_query($con,$z);
			header('Location:atmedit1.php?editphp=success');
		    exit();
		}	
        else if( empty($st) && empty($bank) && empty($dis) )
		{   $z="update atm set landmark='$lan' where atmid='$atmid'";
		    mysqli_query($con,$z);
			header('Location:atmedit1.php?editphp=success');
		    exit();
		}	
          else if( empty($st) && empty($bank) && empty($lan) )
		{   $z="update atm set distance='$dis' where atmid='$atmid'";
		    mysqli_query($con,$z);
			header('Location:atmedit1.php?editphp=success');
		    exit();
		}
         else if(  empty($lan) && empty($dis) )
		{   $z="update atm set station='$st',bank='$bank' where atmid='$atmid'";
		    mysqli_query($con,$z);
			header('Location:atmedit1.php?editphp=success');
		    exit();
		}	
        else if(  empty($bank) && empty($dis) )
		{   $z="update atm set station='$st',landmark='$lan' where atmid='$atmid'";
		    mysqli_query($con,$z);
			header('Location:atmedit1.php?editphp=success');
		    exit();
		}
        else if(  empty($bank) && empty($lan) )
		{   $z="update atm set station='$st',distance='$dis' where atmid='$atmid'";
		    mysqli_query($con,$z);
			header('Location:atmedit1.php?editphp=success');
		    exit();
		}	
        else if(  empty($st) && empty($lan) )
		{   $z="update atm set bank='$bank',distance='$dis' where atmid='$atmid'";
		    mysqli_query($con,$z);
			header('Location:atmedit1.php?editphp=success');
		    exit();	
			}
		else if(  empty($st) && empty($dis) )
		{   $z="update atm set bank='$bank',landmark='$lan' where atmid='$atmid'";
		    mysqli_query($con,$z);
			header('Location:atmedit1.php?editphp=success');
		    exit();	
			}
	    else if(  empty($station) && empty($bank) )
		{   $z="update atm set distance='$dis',landmark='$lan' where atmid='$atmid'";
		    mysqli_query($con,$z);
			header('Location:atmedit1.php?editphp=success');
		    exit();	
			}
		 else if(  empty($st)  )
		{   $z="update atm set bank='$bank', distance='$dis',landmark='$lan' where atmid='$atmid'";
		    mysqli_query($con,$z);
			header('Location:atmedit1.php?editphp=success');
		    exit();	
			}	
		else if(  empty($bank)  )
		{   $z="update atm set station='$st', distance='$dis',landmark='$lan' where atmid='$atmid'";
		    mysqli_query($con,$z);
			header('Location:atmedit1.php?editphp=success');
		    exit();	
			}	
        else if(  empty($lan)  )
		{   $z="update atm set bank='$bank', distance='$dis',station='$st' where atmid='$atmid'";
		    mysqli_query($con,$z);
			header('Location:atmedit1.php?editphp=success');
		    exit();	
			}				
		else if(  empty($dis)  )
		{   $z="update atm set bank='$bank'  , station='$st',landmark='$lan' where atmid='$atmid'";
		    mysqli_query($con,$z);
			header('Location:atmedit1.php?editphp=success');
		    exit();	
			}	
		else
		{   $z="update atm set bank='$bank'  , station='$st',landmark='$lan' ,distance='$dis'where atmid='$atmid'";
		    mysqli_query($con,$z);
			header('Location:atmedit1.php?editphp=success');
		    exit();	
			}		
	}
	
?>
