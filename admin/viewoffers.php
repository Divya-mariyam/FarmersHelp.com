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
  <li class="active"><a data-toggle="tab" href="#home">Existing Offers</a></li>
  <li><a data-toggle="tab" href="#menu1">Add New Offer</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <p>
        <?php
       
        require '../connection.php';
        
        $q="select * from tbl_offer where status='0'";
                
                $res=  mysql_query($q);
                
                if(mysql_num_rows($res)==0){
                     echo "<h4 style=color:red;text-align:center;padding-top:5em;>No Offers Found</h4>";
                }
                else{ ?><br/><br/>
    <center><table class="table table-hover">
            <thead>
            <th>Offer Name</th>
            <th>Description</th>
            <th>From</th>
            <th>To</th>
            <th></th>
            <th></th>
            </thead><tbody>
                <?php  
                while($row=  mysql_fetch_array($res)){
                    echo "<tr>"
                    . "<td>$row[offername]</td>"
                    . "<td>$row[description]</td>"
                     . "<td>$row[availablefrom]</td>"
                    . "<td>$row[availableto]</td>"
                            . "<td><a href='removeofferprocess.php?id=$row[offerid]' class='btn btn-danger'>Remove</a></td>"
                     . "</tr>";
                }
                ?></tbody></table></center>
<?php                }
        
        
        ?></p></div>
  <div id="menu1" class="tab-pane fade"><br/><br/>
    <p> 
    
         <form method="post" action="">
            <center>
                <table style="width:50%;">
                    <tr><td>
                            <h5>Offer Name</h5>
                            <input type="text" name="ofname" placeholder="Enter Offer Name" class="form-control" required=""/><br/>
                            <h5>Offer Description</h5>
                            <textarea name="ofdescri" placeholder="Enter Offer Description" class="form-control" required="" style="resize:none;"></textarea><br/>
                            <h5>Available From</h5>
                            <input type="date" name="offrom" class="form-control" required=""/><br/>
                             <h5>Available Till</h5>
                            <input type="date" name="ofto" class="form-control" required=""/><br/><br/>
                            <input type="submit" name="offer" class="btn btn-success btn-group-justified" value="Add Offer"/> 
                            
                           </td></tr>
                </table>
            </center>
        </form>
    <?php   

if(isset($_POST["offer"])){
    
    $ofname=$_POST["ofname"];
    $ofdescri=$_POST["ofdescri"];
    $offrom=$_POST["offrom"];
    $offto=$_POST["ofto"];
    
    $q1="select * from tbl_offer where offername='$ofname' and availableto <='$offto' and status='0'";
    $res1=  mysql_query($q1);
    if(mysql_num_rows($res1)>0){
        echo "<script>alert('Offer With Same Name Already Exist')</script>";
    }
 else {
    
     $q2="insert into tbl_offer (offername,description,availablefrom,availableto) values ('$ofname','$ofdescri','$offrom','$offto')";
     if(mysql_query($q2)==1){
     echo "<script>alert('Offer Added')</script>";    
     }
 else {
        echo "<script>alert('Offer Adding Failed')</script>"; 
     }
         echo "<script>window.location='viewoffers.php';</script>";
    }
    
}

?>
    </p>
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
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

