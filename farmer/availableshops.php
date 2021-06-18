<?php session_start();   


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
  <li><a href="purchaseproducts.php">Shop</a></li>
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
<div class="container" id="login"><br/>
        <?php
        require '../connection.php';
        
        $farmerid=$_SESSION["farmerid"];
        
        $q="select * from tbl_order where fid='$farmerid' and pid='$_GET[pid]' and status='0'";
        $res=  mysql_query($q);
        if(mysql_num_rows($res)>0){
            echo "<script>alert('Product Already Exist In cart');"
            . "window.location='purchaseproducts.php';</script>";
        }  else {
            
            $q1="SELECT * FROM tbl_allproduct
            JOIN tbl_category ON `tbl_category`.`categoryid`=`tbl_allproduct`.`catid` WHERE `pid`='$_GET[pid]'";
            $res1=  mysql_query($q1);
            $row1=  mysql_fetch_array($res1);   ?>
            
            <h5 style="padding-top:.5em;">Product Details</h5><hr/>
        <img src="<?php echo $row1["pimage"];   ?>" style="width:200px;height:200px;"/><BR/><BR/>
        <h5>Category : <?php  echo $row1["catname"];   ?></h5>
        <h5>Product name : <?php  echo $row1["pname"];   ?></h5>
            
       
        <?php    $q2="SELECT * FROM tbl_sproduct
JOIN tbl_shop ON tbl_shop.`shopid`=`tbl_sproduct`.`shopid`
WHERE `tbl_sproduct`.`pid`='$_GET[pid]' AND `tbl_sproduct`.`quantity`>'1'";
        $res2=  mysql_query($q2);
        if(mysql_num_rows($res2)==0){
            echo "<center>Product Not Available At Any Shops</center>";
        }
        else{  ?><hr/>
             <h5>This Product is Available at</h5>
             <center><table style="width:80%;" class="table table-hover"><thead>
                        <th>Shop Name</th>
                        <th>Location</th>
                        <th>Selling Price</th>
                        <th></th>
                        </thead><tbody>
             <?php  while($row2=  mysql_fetch_array($res2)){  
                 
                 echo "<tr><td>$row2[sname]</td>"
                         . "<td>$row2[slocation]</td>"
                         . "<td>Rs. $row2[sellprice] /-</td>"
                         . "<td><a href='addtocartprocess.php?pid=$_GET[pid]&&sid=$row2[shopid]'class='btn btn-success'>Add To Cart</a></td></tr>"
                 
                 ?>
        <?php }?></tbody></table></center><?php  }   }
        ?>
    </body>
</html>
