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
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
  <li class="active"><a data-toggle="tab" href="#home">New Findings</a></li>
  <li><a data-toggle="tab" href="#menu1">Approved Findings</a></li>
  <li><a data-toggle="tab" href="#menu2">Rejected Findings</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active"><br/><br/>
    <p>
       <?php
        require '../connection.php';
        
        $q="SELECT * FROM `tbl_finding`
JOIN `tbl_expert` ON `tbl_expert`.`expertid`=`tbl_finding`.`expertid`
WHERE `tbl_finding`.`status`='0'";
                
                $res=  mysql_query($q);
                
                if(mysql_num_rows($res)==0){
                    echo "<h4 style=color:red;text-align:center;padding-top:5em;>No New Finding Uploads Found</h4>";
                }
                else{ ?>
            <center><table class="table table-hover">
            <thead>
            <th>Expert</th>
            <th>Note Name</th>
            <th>Description</th>
            <th>Uploaded Date</th>
            <th></th>
            <th></th>
            <th></th>
            </thead><tbody>
                <?php  
                while($row=  mysql_fetch_array($res)){
                    $name=  explode("/", $row["fnote"]);
                    echo "<tr>"
                    . "<td>$row[ename]</td>"
                    . "<td>".end($name)."</td>"
                    . "<td>$row[fdescri]</td>"
                     . "<td>$row[uplddate]</td>"
                         . "<td><a href='$row[fnote]'>Download</a></td>"
                            . "<td><a href='findingapprovalprocess.php?approve&&fid=$row[findingid]'>Approve</a></td>"
                            . "<td><a href='findingapprovalprocess.php?reject&&fid=$row[findingid]'>Reject</a></td>"
                     . "</tr>";
                }
                ?></tbody></table></center>
<?php                }
        
        
?></p></div>
  <div id="menu1" class="tab-pane fade"><br/><br/>
    <p> <?php
        
       $q="SELECT * FROM `tbl_finding`
JOIN `tbl_expert` ON `tbl_expert`.`expertid`=`tbl_finding`.`expertid`
WHERE `tbl_finding`.`status`='1'";
                
                $res=  mysql_query($q);
                
                if(mysql_num_rows($res)==0){
 echo "<h4 style=color:red;text-align:center;padding-top:5em;>No Approved Findings Found</h4>";
                }
                else{ ?>
            <center><table class="table table-hover">
            <thead>
            <th>Expert</th>
            <th>Note Name</th>
            <th>Description</th>
            <th>Uploaded Date</th>
            <th></th>
            <th></th>
            <th></th>
            </thead><tbody>
                <?php  
                while($row=  mysql_fetch_array($res)){
                    $name=  explode("/", $row["fnote"]);
                    echo "<tr>"
                    . "<td>$row[ename]</td>"
                    . "<td>".end($name)."</td>"
                    . "<td>$row[fdescri]</td>"
                     . "<td>$row[uplddate]</td>"
                         . "<td><a href='$row[fnote]'>Download</a></td>"
                     . "</tr>";
                }
                ?></tbody></table></center>
                    <?php                }     ?></p>
  </div>
    <div id="menu2" class="tab-pane fade"><br/><br/>
    <p> <?php
        
       $q="SELECT * FROM `tbl_finding`
JOIN `tbl_expert` ON `tbl_expert`.`expertid`=`tbl_finding`.`expertid`
WHERE `tbl_finding`.`status`='2'";
                
                $res=  mysql_query($q);
                
                if(mysql_num_rows($res)==0){
 echo "<h4 style=color:red;text-align:center;padding-top:5em;>No Rejected Findings Found</h4>";
                }
                else{ ?>
            <center><table class="table table-hover">
            <thead>
            <th>Expert</th>
            <th>Note Name</th>
            <th>Description</th>
            <th>Uploaded Date</th>
            <th></th>
            <th></th>
            <th></th>
            </thead><tbody>
                <?php  
                while($row=  mysql_fetch_array($res)){
                    $name=  explode("/", $row["fnote"]);
                    echo "<tr>"
                    . "<td>$row[ename]</td>"
                    . "<td>".end($name)."</td>"
                    . "<td>$row[fdescri]</td>"
                     . "<td>$row[uplddate]</td>"
                         . "<td><a href='$row[fnote]' class='btn btn-success'>Download</a></td>"
                     . "</tr>";
                }
                ?></tbody></table></center>
                    <?php                }     ?></p>
  </div>
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
<script type="text/javascript" src="../js/bootstrap.js"></script>
</body>
</html>

