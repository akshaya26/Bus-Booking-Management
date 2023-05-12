<?php
    include_once('newadmin.php');
		
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
} 
$sql =  "SELECT * from atm;";
$result = $conn->query($sql);
echo"<table  cellpadding='20' width='1000' height='50' align='center'  >
			<tr>
			<td width='700' align='center'><b>ATMDID</b></td>
			<td width='900' align='center'><b>STATION</b></td>
			<td width='700' align='center'><b>BANK</b></td>
			<td width='700' align='center'><b>LANDMARK</b></td>
			<td width='700' align='center'><b>DISTANCE</b></td>
			</tr></table>";

			if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table  cellpadding='20' width='1000' height='50' align='center'  >
  <tr>
    <td width='700' align='center'>".$row["atmid"]."</td>
	<td width='800' align='center'>".$row["station"]."</td>
	<td width='700' align='center'>".$row["bank"]."</td>
    <td width='700' align='center'>". $row["landmark"]."</td>
    <td width='700' align='center'>". $row["distance"]."</td>
	
    
  </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>

  