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
                <li><a href="home.php"><span>Home</span></a></li>
                <li><a href="addcategories.php"><span>Category</span></a></li>
                <li><a href="addproduct.php"><span>Product</span></a></li>
                <li  class="agile_active"><a href="vieworders.php"><span>Orders</span></a></li>
                    <li><a href="../logout.php"><span>Logout</span></a></li>
		</ul>
	</div>
	</div>
</nav>
<!-- //menu -->
  </div>	
        <div class="container" id="body"><br/><br/>
     <?php      
     
     require '../connection.php';
     $shopid=$_SESSION["shopid"];
     $q="SELECT * FROM `tbl_order`
JOIN `tbl_farmer` ON `tbl_farmer`.`farmerid`=`tbl_order`.`fid`
 join tbl_allproduct on tbl_allproduct.pid=tbl_order.pid
WHERE tbl_order.`shopid`='$shopid' and tbl_order.status=1 order by orderid desc";
     $res=  mysql_query($q);
     if(mysql_num_rows($res)==0){
         echo "<center><h4 style='color:red;padding-top:5em;padding-bottom:8em;'>No Orders Recieved</h4></center>";
     }
     else
     {  
while($row=  mysql_fetch_array($res)){
         ?>
            <center><table class="table table-hover"><thead>
            <th>Customer</th>
            <th>Address</th>
            <th>Order Date</th>
            <th>Product</th>
            <th>Quantity</th>
            <th></th>
            </thead><tbody>
     <?php
     echo "<tr><td>$row[fname]</td>"
             . "<td>$row[faddr] <br/> $row[fdistrict] , $row[fstate]</td>"
             . "<td>$row[orderdate]</td>"
             . "<td>$row[pname]</td>"
             . "<td>$row[quantity]</td>"
             . "<td><a href='dispatchprocess.php?oid=$row[orderid]'>Dispatch</a><td>"
             . "</tr>";
     ?>
            </tbody></table></center>
                <?php
}
     }
     
     ?></div>
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