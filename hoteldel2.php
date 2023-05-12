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
	<form action="hotelrmvlink.php" method="post">
	<!--<tr><th><h1 align=>HOTEL</h1></th></tr>-->
	<tr><td>
	<input  type="text" name="hotelid"   placeholder="Hotel ID" required autofocus></tr></td>
	<tr height="100" align="center"><td><button class="button">REMOVE</button></td></tr>
	</form>
	</table>
	</div>
</section>
<h1 align="center">Hotelid not existing!</h1>
</body>
<?php
	
?>