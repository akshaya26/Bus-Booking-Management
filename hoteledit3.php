<?php
    include_once('newadmin.php');
		
?>


<head>
<link rel="stylesheet" type="text/css" href="stylea.css">
<title>HOTEL</title>
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
<br></br>
<table align="center">
	<form action="hoteleditlink.php" method="post">
	<!--<tr><th><h1>HOTEL</h1></th></tr>-->
	<tr><td>
	<input  type="text" name="hotelid"   placeholder="Hotel ID" required autofocus></tr></td></table>
	<tr><th><h2 align="center">Enter new details below..</h2></th></tr>
	<table align="center">
	<tr><td>
	<input  type="text" name="station"   placeholder="Station"></tr></td>
	<tr><td>
	<input  type="text" name="name"   placeholder="Name"></tr></td>
	<tr><td>
	<input  type="text" name="landmark"   placeholder="Landmark"></tr></td>
	<tr><td>
	<input  type="number" min="0" name="distance"   placeholder="Distance"></tr></td>
	<tr><td>
	<input  type="number"size="10" name="contactno"   placeholder="Contact Number"></tr></td>
	<tr height="100" align="center"><td><button class="button">MODIFY</button></td></tr>
	</form>
	</table>
	</div>
</section>
<h1 align="center">Hotelid not existing! </h1
</body>
<?php
	
?>