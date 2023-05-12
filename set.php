<?php
include_once('header.php');
?>
<!DOCTYPE html>
<html>

<title>HOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="sty.css">
<style>
	  
@font-face { font-family: TektonPro-BoldExt; src: url('TektonPro-BoldExt.otf'); } 
      h1 {
         font-family: TektonPro-BoldExt
      }
	body{
    background-image:url('bus6.jpg');
	background-position:center;
	background-repeat:no-repeat;
    background-size:1500px;
	background-color:white;
	width:100%;
	height:600px;
	
}  

</style>
<body >

<p  style="text-align: center; font-size:70px; font-family:courier; color:white"><b>ON THE WAY</b> </p>
<p style="text-align:center; font-size:30px; font-family:arial;">SEARCH FOR BUS TICKETS</P>
<div>
<form class="form" name="f1" method="post" action="new1.php" id="f1">
        <table align="center">
            <tr>
                 <td><input class="in" type="text" list="dis" name="source"   placeholder="Source" />
								
			<datalist id="dis">
				  <option value="Palakkad">
				  <option value="Thrissur">
				  <option value="Ernakulam">
				  <option value="Kottayam">
				  <option value="Kollam">
				  
				</datalist>
				</td>

            </tr>
			<br>
            <tr>
                <td><input class="in" type="text" name="destination" list="dis"  placeholder="Destination"/><br/>
                <datalist id="dis">
				  <option value="Palakkad">
				  <option value="Thrissur">
				  <option value="Ernakulam">
				  <option value="Kottayam">
				  <option value="Kollam">
				</datalist>
				</td>

            </tr>
			<tr>
                <td><input class="in" type="date" name="date"   placeholder="Date"/><br/>
           		</tr>	
			 <tr>
                <td align="center">
                    <b><input class="in_button" type="submit" name="search" value="SEARCH"  /></br>
                </td>
            </tr>
			

        </table>
    </form>
</div>

  <div align="center">
    <h1 >Contact</h1>
    <i  style="width:80px"></i> ERNAKULAM<br>
    <i  style="width:80px"></i> Phone: 1800-1234-1555<br>
    <i  style="width:80px"> </i> Email: ontheway@mail.com<br>
	
    <form class="form" name="f2" action="msglink.php" method="post"  id="f2">
      <p><input class="in_contact" type="text" placeholder="Name" required name="username"></p>
      <p><input class="in_contact" type="text" placeholder="Message" required name="msg"></p>
      <p><button class="in_button1" type="submit">SEND MESSAGE</button></p>
    </form>
	  </div>
  
<!-- End page content -->
</div>



<script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>

</body>
</html>
