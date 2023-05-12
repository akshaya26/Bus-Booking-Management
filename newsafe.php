<!DOCTYPE html>
<html>
<body>
<form action="new3.php">
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
} 
$sou=$_POST['source'];
$des=$_POST['destination'];

$sql =  "SELECT a.busid,bname,bus.type,a.time ,b.time,rate
FROM route as a, route as b,bus,fare
where a.station='$sou' and b.station='$des' AND a.busid=b.busid and bus.busid=b.busid and a.time<b.time 
and fare.src='$sou' AND fare.dest='$des' and bus.type=fare.type;";
$result = $conn->query($sql);
echo"<table  cellpadding='20' width='1000' height='50' align='center'  width='200' '>
			<tr>
			<td width='350' align='center'><b>BUSID</b></td>
			<td width='350' align='center'><b>BUSNAME</b></td>
			<td width='350' align='center'><b>TYPE</b></td>
			<td width='350' align='center'><b>DEPART TIME</b></td>
			<td width='350' align='center'><b>ARRIVAL TIME</b></td>
			<td width='350' align='center'><b>FARE</b></td>
			<td width='350' align='center'><b>LINK</b></td>
			</tr></table>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table  cellpadding='20' width='1000' height='50' align='center'  width='200' >
  <tr>
    <td width='350' align='center'>".$row["busid"]."</td>
    <td width='350' align='center'>". $row["bname"]."</td>
    <td width='350' align='center'>". $row["type"]."</td>
	<td width='350' align='center'>".$row["time"]."</td>
	<td width='350' align='center'>".$row["time"]."</td>
	<td width='350' align='center'>".$row["rate"]."</td>
    <td width='350' align='center'><button>link</button></td> 
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

  