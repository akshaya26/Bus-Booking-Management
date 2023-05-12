<?php
include_once('userlogged.php');
?>
<!DOCTYPE html>
<html>

<title>HOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styleuser.css">
<body  >

<form class="form" name="f1" method="post" action="new1.php" id="f1" >
        <table align="center" width="400" >
		    <tr>
                 <td><input class="in" type="text" list="dis" name="source"   placeholder="Source" required autofocus />
								
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
                <td><input class="in" type="text" name="destination" list="dis"  placeholder="Destination"required /><br/>
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
                 <td><input class="in" type="date"  name="doj"   placeholder="date" required />
			
           	</tr>		
			 <tr>
                <td align="center">
                    <b><input class="in_button" type="submit" name="search" value="SEARCH"  /></br>
                </td>
            </tr>
			
					

        </table>
    </form>
</div>
<div>

<!--<script>
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
</script>-->

</body>
</html>
