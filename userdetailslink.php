<?php
    include_once('userlogged.php');
		
?>
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "busbook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} session_start();
$user=$_SESSION['name'];
//echo "<script type='text/javascript'>alert('welcome')</script>";
$sql =  "SELECT booking.busid,bname,booking.src,booking.dest,doj,tot_amt,sts from booking,bus where username='$user' and bus.busid=booking.busid";
$result = $conn->query($sql);
echo"<table  cellpadding='20' width='800' height='50' align='center'  >
			<tr>
			<td width='500' align='center'><b>BUSID</b></td>
			<td width='500' align='center'><b>BUSNAME</b></td>
			<td width='500' align='center'><b>SOURCE</b></td>
			<td width='500' align='center'><b>DESTINATION</b></td>
			<td width='500' align='center'><b>DATE</b></td>
			<td width='500' align='center'><b>RATE</b></td>
			<td width='500' align='center'><b>STATUS</b></td>
			</tr></table>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table  cellpadding='20' width='800' height='50' align='center'  >
  <tr>
    <td width='500' align='center'>".$row["busid"]."</td>
    <td width='500' align='center'>". $row["bname"]."</td>
	<td width='500' align='center'>". $row["src"]."</td>
	<td width='500' align='center'>".$row["dest"]."</td>
	<td width='500' align='center'>". $row["doj"]."</td>
    <td width='500' align='center'>". $row["tot_amt"]."</td>
	<td width='500' align='center'>". $row["sts"]."</td>
    
  </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>
