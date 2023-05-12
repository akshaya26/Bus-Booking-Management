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
$sql =  "SELECT * from fare;";
$result = $conn->query($sql);
echo"<table  cellpadding='20' width='1000' height='50' align='center'  >
			<tr>
			<td width='500' align='center'><b>SOURCE</b></td>
			<td width='500' align='center'><b>DESTINATION</b></td>
			<td width='500' align='center'><b>TYPE</b></td>
            <td width='500' align='center'><b>RATE</b></td>
			</tr></table>";

			if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table  cellpadding='20' width='1000' height='50' align='center'  >
  <tr>
    <td width='500' align='center'>".$row["src"]."</td>
	<td width='500' align='center'>".$row["dest"]."</td>
	<td width='500' align='center'>".$row["type"]."</td>
	<td width='500' align='center'>".$row["rate"]."</td>
    
    
  </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>

  