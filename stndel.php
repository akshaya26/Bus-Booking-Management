<?php
    include_once('newadmin.php');
		
?>
<head>
<link rel="stylesheet" type="text/css" href="stylea.css">
<title>STATION</title>
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
<form action="stndellink.php" method="post">   
<table align="center">
	<!--<tr><th><h1 align=>STATION</h1></th></tr>-->
	<tr><td>
	<input  type="text" name="name"   placeholder="Station" required autofocus></tr></td>
	<tr height="100" align="center"><td><button class="button" >REMOVE</button></td></tr>
	</table>
	</form>
	</div>
</section>

</body>
<?php
	
	
?>