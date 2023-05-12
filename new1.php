<!DOCTYPE html>
<html>
<body>
<form action="seat.php" method="post">
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
$sou=$_POST['source'];
$des=$_POST['destination'];
$dat=$_POST['date'];
$_SESSION['sou']=$sou;
$_SESSION['des']=$des;
$_SESSION['dat']=$dat;
$sql =  "SELECT bname,search.busid ,type,depttime,arrtime FROM bus,search WHERE bus.busid=search.busid AND search.srcstn='$sou' AND search.deststn='$des'";
$result = $conn->query($sql);


echo"<table  cellpadding='20' width='1500' height='50' align='center'   border='0' >
			<tr>
			<td width='520' ><b>BUSID</b></td>
			<td width='460'><b>BUSNAME</b></td>
			<td width='550'><b>TYPE</b></td>
			<td width='450'><b>DEPARTURE</b></td>
			<td width='450'><b>ARRIVAL</b></td>
			<td width='410'><b>LINK</b></td>
			</tr></table>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table cellpadding='20' cellspacing='5' width='1500' height='50' align='center'   border='0'>
  <tr>
    <td width='200' >".$row["busid"]."</td>
    <td width='200' >".$row["bname"]."</td>
    <td width='200' >".$row["type"]."</td>
	<td width='200' >".$row["depttime"]."</td>
	<td width='200' >".$row["arrtime"]."</td>
    <td width='150'><button type='submit' value=$row[busid] name='bid'>BOOK</button></td>
  </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
</form>
</body>
</html>

  