<?php
session_start();
 if (!isset($_SESSION['name']) && !isset($_SESSION['pass']))
	 {
echo"You Are Not Authorized To Visit This Page";
   
    }
else
	{
		
?>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<link rel="icon" type="image/gif/png/jpg" href="admin.jpg">
<title>Admin Login</title>
<link href="admincss/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="admincss/style.css" rel='stylesheet' type='text/css' />
<link href="admincss/font-awesome.css" rel="stylesheet"> 
<link href="admincss/custom.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
                <div class="navbar-header" >
                
               <h1> <a class="navbar-brand" href="index.html">Admin</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
					
			</section>
			<form class=" navbar-left-right">
             </form>
            <div class="clearfix"> </div>
           </div>
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
					<ul class="nav nav-second-level">
                        <!-- <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Bookings</span> </a>
						<a href="#" class=" hvr-bounce-to-right" ><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Cancellation</span></span></a> -->
                             <li><a href="bookingsdisplay.php" class=" hvr-bounce-to-right"> <i class="fa fa-sign-in nav_icon"></i>BOOKINGS</a></li>
							<li><a href="userdisplay.php" class=" hvr-bounce-to-right"> <i class="fa fa-sign-in nav_icon"></i>USER DETAILS</a></li>
							<li><a href="busdisplay.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>VIEW BUSES</a></li>
							<li><a href="busadd.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>ADD BUS</a></li>
							<li><a href="busdel.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>REMOVE BUS</a></li>
							<li><a href="busedit.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>MODIFY BUS</a></li>
							<li><a href="routeadd.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>ADD ROUTE</a></li>
							<li><a href="stndisplay.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>VIEW STATIONS</a></li>
							<li><a href="stnadd.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>ADD STATION</a></li>
							<li><a href="stndel.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>REMOVE STATION</a></li>
							<li><a href="faredisplay.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>VIEW FARE</a></li>
							<li><a href="fareadd.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>ADD FARE<span class="nav-label"></span> </a></li>
							<li><a href="fareedit.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>MODIFY FARE</a></li>
							<li><a href="hoteldisplay.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>VIEW HOTELS</a></li>
							<li><a href="hoteladd.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>ADD HOTEL</a></li>
							<li><a href="hoteldel.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>REMOVE HOTEL</a></li>
							<li><a href="hoteledit.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>MODIFY HOTEL</a></li>
							<li><a href="atmdisplay.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>VIEW ATMS</a></li>
							<li><a href="atmadd.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>ADD ATM</a></li>
							<li><a href="atmdel.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>REMOVE ATM</a></li>
							<li><a href="atmedit.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>MODIFY ATM</a></li>
							<li><a href="taxidisplay.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>VIEW TAXISTANDS</a></li>
							<li><a href="taxiadd.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>ADD TAXISTAND</a></li>
							<li><a href="taxidel.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>REMOVE TAXISTAND</a></li>
							<li><a href="taxiedit.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>MODIFY TAXISTAND</a></li>
							<li><a href="signin.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>SIGNOUT</a></li>
					   </ul>
                    </li>
				</ul>
            </div>
			
        </nav>
        
				 <div class="clearfix"> </div>
				</div>
			
		</div>
			<div class="clearfix"> </div>
			
			
		

</body>
</html>
<?php
	}
	
?>

