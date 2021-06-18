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
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //stylesheet -->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<!-- //online fonts -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" type="text/css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
</head>
<body>
<div class="agileits_main">
<!-- header -->
<div class="w3_agile_logo">
	<h1 class="text-center"><a href="#">Kissan Connect</a></h1>
</div>
<!-- banner -->
<div class="w3_banner">
	<div class="container">
		<div class="slider">
			<div class="callbacks_container">
			   <ul class="rslides callbacks callbacks1" id="slider4">
					<li>	
						<div class="banner_text_w3layouts">
							<h3>The farmer has to be an optimist or he wouldn't still be a farmer.</h3>
							<span> </span>
							<p>Casp Eestibulum </p>
						</div>
					</li>
					 <li>	
						<div class="banner_text_w3layouts">
							<h3>The discovery of agriculture was the first big step toward a civilized life.    </h3>
							<span> </span>
							<p>Rlua vestibulum </p>
						</div>
					</li>
					 <li>	
						<div class="banner_text_w3layouts">
							<h3>You can make a small fortune in farming-provided you start with a large one.   </h3>
							<span> </span>
							<p>Cras vestibulum </p>
						</div>
					</li>
				</ul>
			</div>
		  <script src="js/responsiveslides.min.js"></script>
		  <script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  // Slideshow 4
			  $("#slider4").responsiveSlides({
				auto: true,
				pager:true,
				nav:true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
				  $('.events').append("<li>before event fired.</li>");
				},
				after: function () {
				  $('.events').append("<li>after event fired.</li>");
				}
			  });
		
			});
		 </script>
	   </div>
	</div>   
</div>
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
                    <li ><a href="index.php"><span>home</span></a></li>
                        <li><a href="farmproducts.php" ><span>Farm Products</span></a></li>
                        <li><a href="viewrewards.php"><span>Rewards</span></a></li>
                        <li class="agile_active"><a href="expertregistration.php"><span>Expert</span></a></li>
                        <li><a href="farmerregistration.php"><span>Farmer</span></a></li>
                        <li><a href="shopregistration.php"><span>Shop</span></a></li>
                        <li><a href="index.php"><span>Login</span></a></li>
		</ul>
	</div>
	</div>
</nav>
<!-- //menu -->
  </div>	
<!-- //banner -->	
<!-- home -->

<div class="container" id="rewards"><br/><br/><br/>
        <div class="col-sm-1"></div>
        <div class="col-sm-10" id="body">
            <center>
                <h4 style="color:#119421">Expert Signup - Kissan Connect</h4><br/>
                <style>
                    #input 
                    { height:4em; }
                    #body h5{ padding-bottom:1em;width:50em; }
                    #btn{ height:3em; }
                </style>
        <form method="post" action="" enctype="multipart/form-data">
            <center>
                <table style="width:50%;">
                            <tr><td>
                                    <h5>Your Name</h5>
                                    <input  type="text" name="ename" class="form-control" placeholder="Enter Your Full Name" required="" id="input"/><br/>
                                    <h5>Your Address</h5>
                                    <textarea name="eaddress" class="form-control" placeholder="Enter Your Address" required="" rows="3" style="resize:none;" id="area"></textarea><br/>
                                    <h5>Your Email Address</h5>
                                    <input type="email" name="email" placeholder="Enter Your Email Address" required="" class="form-control" id="input"/><br/>
                                    <h5>Your Contact Number</h5>
                                    <input type="number" name="contact" placeholder="Enter Your Contact Number" required="" class="form-control" id="input"/><br/>
                                    <h5>Your Designation</h5>
                                    <input type="text" name="designation" placeholder="Enter Your Designation" required="" class="form-control" id="input"/><br/>
                                    <h5>Your Qualification</h5>
                                    <input type="text" name="qualification" placeholder="Enter Your Qualification" required="" class="form-control" id="input"/><br/>
                                    <h5>Field Of Specialization</h5>
                                    <input type="text" name="field" placeholder="Enter Your Specialization Field" required="" class="form-control" id="input"/><br/>
                                    <h5>Your Profile Picture</h5>
                                    <input type="file" name="image" required="" class="form-control" id="input"/><br/><br/>
                            <center><input type="submit" name="reg" value="Sign Up" class="btn btn-success btn-group-justified" id="btn"/></center>
                        </td></tr>
                </table>
                       
            </center>
 </form>
<br/>
<center><a href="index.php">Back To Home</a></center></div><div class="col-sm-1"></div></div>
<div class="copy-right agileits-w3layouts">
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
      


            
<?php     

if(isset($_POST["reg"])){
require './connection.php';

$name=$_POST["ename"];
$addr=$_POST["eaddress"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$desig=$_POST["designation"];
$qual=$_POST["qualification"];
$field=$_POST["field"];

$q1="select * from tbl_expert where eemail='$email' or econtact='$contact'";
$res1=  mysql_query($q1);
if(mysql_num_rows($res1)>0){
    
    echo "<script>alert('Email Or Contact Already Exist')</script>";
    
}
 else {
      
      $folder='images/';
      $file=$folder.basename($_FILES['image']['name']);
      move_uploaded_file($_FILES['image']['tmp_name'],$file);
     
      $q2="insert into tbl_expert (ename,eaddress,eemail,econtact,designation,qulaification,field,image) values ('$name','$addr','$email','$contact','$desig','$qual','$field','$file')";
      if(mysql_query($q2)==1){
          
       $q3="select * from tbl_category where catname='$field'";
       $res3=  mysql_query($q3);
       if(mysql_num_rows($res3)==0){
           $q4="insert into tbl_category (catname,cattype) values ('$field','expert')";
           mysql_query($q4);
       }
       $q5="insert into tbl_login (username,password,usertype) values ('$email','$contact','expert')";
       if(mysql_query($q5)==1){
           
            echo "<script>alert('Regisration Success.Please Wait For Admin Approval');</script>";
           
       }
       else{
         
            echo "<script>alert('Regisration Failed.Please Try Again');</script>";
           
       }     
     
 }
 else
 {
      echo "<script>alert('Regisration Failed.Please Try Again');</script>";
           
 }

}
   echo "<script>window.location='index.php'</script>";
}
?>
