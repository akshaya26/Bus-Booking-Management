<?php
    include_once('newadmin.php');
	
	
?>
<head>
<link rel="stylesheet" type="text/css" href="stylea.css">
<title>ROUTE</title>
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
<br></br><br></br><br></br>  
<table align="center">
	<form action="routeaddlink.php" method="post" >
<!--<tr><th><h1 align=>BUS</h1></th></tr>-->
	<tr><td>
	<input  type="text" name="busid"   placeholder="Bus ID" required autofocus></tr></td>
	<tr><td>
	<input  type="text" name="station"   placeholder="Station" required></tr></td>
	
	<tr><td>
	<input  type="text" name="time"   placeholder="Depart Time" required></tr></td>
	
	
	<tr height="100" align="center"><td><button class="button">ADD</button></td></tr>
	</table>
	</form>
	</div>
</section>
<h1 align="center">Successfully Added!</h1>
</body>
<?php
	
	
?>