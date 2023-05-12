<?php
    include_once('newadmin.php');
	?>


<head>
<link rel="stylesheet" type="text/css" href="stylea.css">
<title>FARE</title>
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
	<form action="farealink.php" method="post">
<!--	<tr><th><h1 align=>FARE</h1></th></tr>-->
	<tr><td>
	<input  type="text" name="src"   placeholder="Source" required autofocus></tr></td>
	<tr><td>
	<input  type="text" name="dest"   placeholder="Destination" required></tr></td>
	<tr>
            <td><input  type="text" list="typ" name="type"   placeholder="A/C or Non A/C" required />
								
			      <datalist id="typ">
				  <option value="A/C">
				  <option value="NON A/C">
				  				  
				</datalist>
			</td>
    </tr>
	<tr><td>
	<input  type="number" min="0" name="rate"   placeholder="Fare" required></tr></td>
	<tr height="100" align="center"><td><button class="button">ADD</button></td></tr>
	</form>
	</table>
	</div>
</section>
<h1 align="center">Insertion Failed!</h1>
</body>
<?php
	
?>