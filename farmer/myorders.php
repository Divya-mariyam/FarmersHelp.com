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
  <li class="agile_active"><a href="myorders.php">My Orders</a></li>
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
        <h5 style="padding-top:.5em;">My Orders</h5><hr/>
        <?php
       require '../connection.php';
       $fid=$_SESSION["farmerid"];
       $date=date('Y-m-d');
       $q="select * from tbl_order where fid='$fid' and status='1' order by orderid desc";
       $res=  mysql_query($q);
       if(mysql_num_rows($res)==0){
           echo "<center>No New Orders Found</center>"
           . "<a href='purchaseproducts.php' class=''>Shop Now</a>";
       }
 else {    ?>
        <center><table  class="table table-hover"><thead>
            <th></th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Status</th></thead><tbody>
<?php      
$total=0;
$amount=0;
while($row=  mysql_fetch_array($res)){
    $q1="select pname,pimage from tbl_allproduct where pid='$row[pid]'";
    $res1=  mysql_query($q1);
    $row1=  mysql_fetch_array($res1);
    $q2="select sellprice from tbl_sproduct where pid='$row[pid]'";
    $res2=  mysql_query($q2);
    $row2=  mysql_fetch_array($res2);
    $amount=$row["quantity"]*$row2["sellprice"];
    $total=$total+$amount;
    echo "<tr>"
    . "<td><img src='$row1[pimage]' style='width:150px;height:150px;'/></td>"
    . "<td>$row1[pname]</td>"
            . "<td>Rs. $amount /-</td>"
            . "<td>$row[quantity]</td><td>";
    if($row["status"]==1){
        echo "Order Placed";
    }
    else{
        echo "Dispatched & Delivered";
    } echo "</td></tr>";
}
    ?>
           </tbody></table></center>
 <?php }

        ?>
  
    </body>
</html>