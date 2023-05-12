<?php
    include_once('newadmin.php');
		
?>


<head>
<link rel="stylesheet" type="text/css" href="stylea.css">
<title>ATM</title>
<style> 
    input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
 input[type=number] {
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
<br></br><br></br><br></br> 
<form action="atmadlink.php" method="post"> 
<table align="center">
	<!--<tr><th><h1 align=>ATM</h1></th></tr>-->
	<tr><td>
	<input  type="text" name="atmid"   placeholder="ATM ID" required autofocus></tr></td>
	<tr><td>
	<input  type="text" name="station"   placeholder="Station" required></tr></td>
	<tr><td>
	<input  type="text" name="bank"   placeholder="Bank Name"  required></tr></td>
	<tr><td>
	<input  type="text" name="landmark"   placeholder="Landmark"  required></tr></td>
	<tr><td>
	<input  type="number" min="0" name="distance"   placeholder="Distance"  required></tr></td>
	<tr height="100" align="center" ><td><button class="button">ADD</button></td></tr>
	</table>
	</form>
	</div>
</section>
<h1 align="center">Successfully Added</h1>
</body>
<?php
	
	
?>