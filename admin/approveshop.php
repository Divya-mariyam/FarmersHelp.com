<?php     
session_start();
if(!isset($_SESSION["email"])){
    header('location:../index.php');
}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Kissan Connect</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Candid Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
<!-- stylesheet -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //stylesheet -->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<!-- //online fonts -->
<!-- font-awesome-icons -->
<link href="../css/font-awesome.css" type="text/css" rel="stylesheet"> 
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<!-- //font-awesome-icons -->
</head>
<body>
<div class="agileits_main">
<!-- header -->
<div class="w3_agile_logo" style="margin-top:-1em;">
	<h1 class="text-center"><a href="#">Kissan Connect</a></h1>
</div>
<!-- banner -->

<!-- menu -->
<nav class="navbar navbar-inverse ">
	<div class="container">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		</button>
	<div class="collapse navbar-collapse top-nav w3l" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav linkEffects linkHoverEffect_11 custom-menu" style="float:right;">
                    <li><a href="dashboard.php"><span>Dashboard</span></a></li>
                    <li><a href="../logout.php"><span>Logout</span></a></li>
		</ul>
	</div>
	</div>
</nav>
<!-- //menu -->
  </div>	
        <div class="container" id="body"><br/><br/>
        <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">New Shops</a></li>
  <li><a data-toggle="tab" href="#menu1">Approved Shops</a></li>
  <li><a data-toggle="tab" href="#menu2">Rejected Shops</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <p>
       
        
        <?php require '../connection.php';
        
        $q="SELECT * FROM `tbl_shop`
        JOIN tbl_login ON `tbl_login`.`username`=`tbl_shop`.`semail`
        WHERE `tbl_login`.`status`='0'";
                
                $res=  mysql_query($q);
                
                if(mysql_num_rows($res)==0){
                     echo "<h4 style=color:red;text-align:center;padding-top:5em;>No New Shop Registrations Found</h4>";
                }
                else{ ?><br/><br/>
    <center><table class="table table-hover">
            <thead>
            <th>Name</th>
            <th>Location</th>
            <th>District</th>
            <th>State</th>
            <th></th>
            <th></th>
            </thead><tbody>
                <?php  
                while($row=  mysql_fetch_array($res)){
                    echo "<tr>"
                    . "<td>$row[sname]</td>"
                    . "<td>$row[slocation]</td>"
                    . "<td>$row[sdistrict]</td>"
                     . "<td>$row[sstate]</td>"
                            . "<td><a href='shopapprovalprocess.php?approve&&id=$row[loginid]' class='btn btn-success'>Approve</a></td>"
                            . "<td><a href='shopapprovalprocess.php?reject&&id=$row[loginid]' class='btn btn-danger'>Reject</a></td>"
                     . "</tr>";
                }
                ?></tbody></table></center>
<?php                }
        
        
?></p></div>
  <div id="menu1" class="tab-pane fade">
    <p>
          <?php require '../connection.php';
        
        $q="SELECT * FROM `tbl_shop`
        JOIN tbl_login ON `tbl_login`.`username`=`tbl_shop`.`semail`
        WHERE `tbl_login`.`status`='1'";
                
                $res=  mysql_query($q);
                
                if(mysql_num_rows($res)==0){
                     echo "<h4 style=color:red;text-align:center;padding-top:5em;>No  Approved Shops Found</h4>";
                }
                else{ ?><br/><br/>
    <center><table class="table table-hover">
            <thead>
            <th>Name</th>
            <th>Location</th>
            <th>District</th>
            <th>State</th>
            </thead><tbody>
                <?php  
                while($row=  mysql_fetch_array($res)){
                    echo "<tr>"
                    . "<td>$row[sname]</td>"
                    . "<td>$row[slocation]</td>"
                    . "<td>$row[sdistrict]</td>"
                     . "<td>$row[sstate]</td>"
                     . "</tr>";
                }
                ?></tbody></table></center>
<?php                }
        
        
?></p></div>
<div id="menu2" class="tab-pane fade">
    <p>
          <?php require '../connection.php';
        
        $q="SELECT * FROM `tbl_shop`
        JOIN tbl_login ON `tbl_login`.`username`=`tbl_shop`.`semail`
        WHERE `tbl_login`.`status`='2'";
                
                $res=  mysql_query($q);
                
                if(mysql_num_rows($res)==0){
                     echo "<h4 style=color:red;text-align:center;padding-top:5em;>No Rejected Shops Found</h4>";
                }
                else{ ?><br/><br/>
    <center><table class="table table-hover">
            <thead>
            <th>Name</th>
            <th>Location</th>
            <th>District</th>
            <th>State</th>
            </thead><tbody>
                <?php  
                while($row=  mysql_fetch_array($res)){
                    echo "<tr>"
                    . "<td>$row[sname]</td>"
                    . "<td>$row[slocation]</td>"
                    . "<td>$row[sdistrict]</td>"
                     . "<td>$row[sstate]</td>"
                     . "</tr>";
                }
                ?></tbody></table></center>
<?php                }
        
        
?></p></div>
</div></div>
   <div class="copy-right agileits-w3layouts" style="margin-top:30em;">
	<div class="container">
		<div class="social-icons agileits">
     		<ul>
				<li><a href="#" class="fa fa-facebook icon icon-border facebook"> </a></li>
				<li><a href="#" class="fa fa-twitter icon icon-border twitter"> </a></li>
				<li><a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a></li>
				<li><a href="#" class="fa fa-dribbble icon icon-border dribbble"> </a></li>
			</ul>
			<div class="clearfix"> </div>
		</div> 
		<p>© 2017 Kissan Connect. All rights reserved | Design by Techza Solutions</p>	
	</div>
</div>
<!-- //copy-right -->
<!-- Gallery-plugin -->
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/jquery.cm-overlay.js"></script>
		<script>
			$(document).ready(function(){
				$('.cm-overlay').cmOverlay();
			});
		</script>
<!-- //Gallery-plugin -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<script src="js/SmoothScroll.min.js"></script>
<!-- //end-smooth-scrolling -->	
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
		};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

