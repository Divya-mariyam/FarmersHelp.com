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
                   <li><a href="home.php">Home</a></li>
  <li><a href="addquery.php">New Query</a></li>
  <li><a href="additem.php">My Products</a></li>
  <li  class="agile_active"><a href="purchaseproducts.php">Shop</a></li>
  <li><a href="mycart.php">My Cart</a></li>
  <li><a href="myorders.php">My Orders</a></li>
  <li><a href="feedbacks.php">Feedbacks</a></li>
  <li><a style="float:right;" href="../logout.php">Logout</a></li>
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
<div class="container" id="login"><br/>
                    <h4 style="padding-top:.5em;">Shop Products</h4><hr/>
                    <div class="row">
        <form name="" method="post" action="">
            <div class="col-sm-10"><select name="cat" class="form-control">
                                        <option value="">Select Category</option>
                                        <?php    
                                        require '../connection.php';
                                        $q1="select * from tbl_category where cattype='shop'";
                                        $res=  mysql_query($q1);
                                        while($row1=  mysql_fetch_assoc($res)){
                                            echo "<option value='$row1[categoryid]'>$row1[catname]</option>";
                                        }
                                        ?>
                </select></div><div class="col-sm-2">
                    <input type="submit" name="get" value="Get Products" class="btn btn-success"/></div></form></div>
     <br/> <?php
      if(isset($_POST["get"])){
         $catid=$_POST["cat"];
      $q="SELECT * from  tbl_allproduct where catid='$catid'";
      $res=  mysql_query($q);
      if(mysql_num_rows($res)==0){
          echo "No Products Found";
      }
      else
      {   ?>
        <div class="row">
            <?php  while($row=  mysql_fetch_array($res)){   ?>
            <div class="col-sm-3">
                <div class="panel panel-success">
                    <div class="panel-heading"><?php  echo $row["pname"]   ?></div>
                    <div class="panel-body">
                <img src="<?php  echo $row["pimage"];  ?>" style="width:100%;height:200px;"/><br/><br/>
                <a href="availableshops.php?pid=<?php  echo  $row["pid"];   ?>" class="btn btn-success btn-group-justified">Add To Cart</a><br/>
                    </div></div></div>
            <?php } ?>
        </div>
      <?php  }
      }
      
      ?></div>
    </body>
</html>
