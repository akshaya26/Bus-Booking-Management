<?php
	if (isset($_POST['busidd']))    
{    
          echo"succes";
		  
}
else{
echo"error";
}	session_start();
	$w=$_SESSION['name'];
	$a=$_SESSION['sou'];
	$b=$_SESSION['des'];
    $z=$_POST['busidd'];
	$x=$_POST['seat'];
	$y=$_POST['amount'];
	$p=$_SESSION['dat'];
	$boo="BOOKED";
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="busbook";
	$_SESSION['x']=$y;
	
	// Create connection
	$conn=new mysqli($servername,$username,$password,$dbname);
	
	// Check connection
	if ($conn->connect_error) 
	{
		die("connection failed!" . $conn->connect_error);
	}
	echo "connected successully" ;
	
;
	$sql=	"INSERT INTO booking (busid,username,src,dest,doj,seatno,tot_amt,sts) VALUES('$z','$w','$a','$b','$p','$x','$y','$boo')";
	
	if ($conn->query($sql)) 
	{
		header('Location:payment.php');
		
	}
	else 
	{
		echo "Errors ",$sql,"<br>" ,$conn->error;
	}

    $conn->close();

?>