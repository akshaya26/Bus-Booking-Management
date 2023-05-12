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
<br></br><br></br><br></br>  
<table align="center">
	<form action="hoteladlink.php" method="post">
<!--	<tr><th><h1 align=>HOTEL</h1></th></tr>-->
	<tr><td>
	<input  type="text" name="id"   placeholder="Hotel id" required autofocush></tr></td>
	<tr><td>
	<input  type="text" name="station"   placeholder="Station" required></tr></td>
	<tr><td>
	<input  type="text" name="name"   placeholder="Hotel Name" required></tr></td>
	<tr><td>
	<input  type="text" name="landmark"   placeholder="Landmark" required></tr></td>
	<tr><td>
	<input  type="number"  name="distance"   min="0" placeholder="Distance" required></tr></td>
	<tr><td>
	<input  type="number" name="contactno"   size="10" placeholder="Contact Number" required></tr></td>
	<tr height="100" align="center"><td><button class="button">ADD</button></td></tr>
	</form>
	</table>
	</div>
</section>
<h1 align="center">Successfully Added </h1>
</body>
<?php
	
?>