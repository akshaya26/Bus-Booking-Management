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
/*$userid=$_POST['userid'];
$name=$_POST['name'];
$sou=$_POST['src'];
$dest=$_POST['dest'];
$doj=$_POST['doj'];
$rate=$_POST['rate'];
$sts=$_POST['sts'];*/
$sql =  "SELECT username,emailid,phoneno from user";
$result = $conn->query($sql);
echo"<table  cellpadding='20' width='800' height='50' align='center'  >
			<tr>
		
			<td width='550' align='center'><b>USERNAME</b></td>
			<td width='550' align='center'><b>EMAIL</b></td>
			<td width='550' align='center'><b>CONTACT</b></td>
			</tr></table>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table  cellpadding='20' width='800' height='50' align='center'  >
  <tr>
  
    <td width='550' align='center'>". $row["username"]."</td>
    <td width='550' align='center'>". $row["emailid"]."</td>
	<td width='550' align='center'>".$row["phoneno"]."</td>
  </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>

  