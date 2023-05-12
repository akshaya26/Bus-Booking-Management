<?php
    include_once('newadmin.php');
	?>
<head>
<link rel="stylesheet" type="text/css" href="stylea.css">
<title>BUS</title>
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
<form action="buseditlink.php" method="post">
<table align="center">
	<!--<tr><th><h1>BUS</h1></th></tr>-->
	<tr><td>
	<input  type="text" name="busid"   placeholder="Bus ID" required autofocus></tr></td></table>
	<tr><th><h2 align="center">Enter new details below..</h2></th></tr>
	<table align="center">
	<tr><td>
	<input  type="text" name="bname"   placeholder="Bus Name"></tr></td>
	<tr>
            <td><input  type="text" list="typ" name="type"   placeholder="A/C or Non A/C"  />
								
			      <datalist id="typ">
				  <option value="A/C">
				  <option value="NON A/C">
				  				  
				</datalist>
			</td>
    </tr>
	<tr><td>
	<input  type="text" name="src"   placeholder="Source"></tr></td>
	<tr><td>
	<input  type="text" name="dest"   placeholder="Destination"></tr></td>
	<tr height="100" align="center"><td><button  class="button" >MODIFY</button></td></tr>
	</table>
	</form>
	</div>
</section>
<h1 align="center">Updation Failed!</h1>
<?php
	
?>