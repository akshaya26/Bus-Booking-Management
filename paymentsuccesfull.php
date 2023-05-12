<?php
include_once('headerlogout.php');
?>
<head>
<link rel="stylesheet" type="text/css" href="stylea.css">
<title>Payment successfull</title>
<style> 
    
h1{
font-size: 40px;
}
</style>
</head>
<body>
<h1 align="center">PAYMENT SUCCESSFULL!!</h1>
<h3 align="center">View Nearby Facilities!!</h3>
 
<table align="center">
    <form action="taxidisp.php" method="post" >
	<tr height="100" align="center"><td><button class="button">TAXISTAND</button></td></tr>
	</form>
	<form action="hoteldisp.php" method="post" >
     <tr height="100" align="center"><td><button class="button">HOTEL</button></td></tr>
	 	</form>
	 <form action="atmdisp.php" method="post" >
	 <tr height="100" align="center"><td><button class="button">ATM</button></td></tr>
	 	</form>
	 
	 
	
	
	</table>
	</div>
</section>

</body>
<?php
	
	
?>