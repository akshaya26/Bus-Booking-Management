<?php
include_once('headerlogout.php');
?>
<head>
<link rel="stylesheet" type="text/css" href="stylea.css">
<title>PAYMENT</title>
<style> 
    input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
h1{
font-size: 40px;
}
</style>
</head>
<body>
<section id="process">
<div class="row section-intro">
<br></br>  
<table >
	<tr><th><h1 align=>PAYMENT SLIP</h1></th></tr></table>
	<table ><?php
session_start();
$a=$_SESSION['sou'];
$b=$_SESSION['des'];
$p=$_SESSION['dat'];

$t=$_SESSION['x'];



	echo"<tr><td><h2> Source :".$a."</h2></td></tr>";
	echo"<tr><td><h2> Destination :".$b."</h2></td></tr>";
	echo"<tr><td><h2> Date of journey  :".$p."</h2></td></tr>";
	
	echo"<tr><td><h2> Total amount :".$t."</h2></td></tr>";
	echo"<tr height='100' align='center'><td><a href='paymentsuccesfull.php'  class='button' >CONFIRM PAYMENT</a></td></tr>";
	?>
	
	</table>
	</div>
</section>

</body>
