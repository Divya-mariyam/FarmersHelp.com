<?php
session_start();
if(!isset($_SESSION["email"])){
    header('location:../login.php');
}

$email=$_SESSION["email"];
require '../connection.php';
$q="select expertid,field,ename from tbl_expert where eemail='$email'";
$res= mysql_query($q);
$row=  mysql_fetch_array($res);
$_SESSION["expertid"]=$row["expertid"];
$q1="select categoryid from tbl_category where catname='$row[field]' and cattype='expert'";
$res1= mysql_query($q1);
$row1=  mysql_fetch_array($res1);
$_SESSION["fieldid"]=$row1["categoryid"];

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
<!-- //font-awesome-icons -->
</head>
<body>
<div class="agileits_main">
<!-- header -->
<div class="w3_agile_logo">
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
		<ul class="nav navbar-nav linkEffects linkHoverEffect_11 custom-menu">
                    <li class="agile_active"><a href="index.php"><span>home</span></a></li>
                    <li><a href="uploadfindings.php" ><span>Upload Findings</span></a></li>
                    <li><a href="viewmyfindings.php"><span>My Findings</span></a></li>
                        <li><a href="../logout.php"><span>Logout</span></a></li>
		</ul>
	</div>
	</div>
</nav>
<!-- //menu -->
  </div>	
<!-- //banner -->	
<!-- home -->

<!-- //home -->
<!-- about -->
<div class="container" id="login"><br/><br/><br/>
            <h4 style="padding-top:.5em;">User Queries</h4><hr/>
        <?php
       
        require '../connection.php';
        $expertid=$_SESSION["expertid"];
        $q1="SELECT categoryid,catname FROM tbl_category
JOIN tbl_expert ON `tbl_expert`.`field`=`tbl_category`.`catname`
WHERE tbl_expert.`expertid`='$expertid'";
        $res1=  mysql_query($q1);
        $row1=  mysql_fetch_array($res1);
        
        $catid=$row1["categoryid"];
        
        $q2="SELECT * FROM `tbl_query`"
                . "join tbl_farmer on tbl_farmer.farmerid=tbl_query.fid where tbl_query.catid='$catid' order by qid desc";
                
                $res=  mysql_query($q2);
                
                if(mysql_num_rows($res)==0){
                      echo "<h4 style='color:red;padding-top:5em;text-align:center;'>No Queries Found For You</h4>";
                }
                else{ ?><ul>
                <?php  
                while($row=  mysql_fetch_array($res)){
                    echo "<li>$row[fname] posted a query related to $row1[catname]</li><br/>"
                    . "$row[query]";
                    $expertid=$_SESSION["expertid"];
                    $q3="select * from `tbl_queryreply` where `qid`='$row[qid]' and  exid='$expertid'";
                    $res3=  mysql_query($q3);
                    if(mysql_num_rows($res3)==0){
                            echo "<a href='queryreply.php?id=$row[qid]' style='float:right'>Reply</a>";
                }
                else{
                    echo "<h5 style='float:right;'>Already Replied</h5>";
                }
                ?></ul>
<?php                }
                }
        
        
                ?><br/><br/><br/></div>
<div class="copy-right agileits-w3layouts" style="margin-top:22em;">
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
		<p>© 2017 candid. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>	
	</div>
</div>
<!-- //copy-right -->
<!-- Gallery-plugin -->
<script src="../js/jquery.mobile.custom.min.js"></script>
<script src="../js/jquery.cm-overlay.js"></script>
		<script>
			$(document).ready(function(){
				$('.cm-overlay').cmOverlay();
			});
		</script>
<!-- //Gallery-plugin -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<script src="../js/SmoothScroll.min.js"></script>
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