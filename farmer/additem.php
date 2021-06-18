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
  <li class="agile_active"><a href="additem.php">My Products</a></li>
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

<!-- //home -->
<!-- about -->
<div class="container" id="login"><br/>
                    <h4 style="padding-top:.5em;">Add Product</h4><hr/>
        <form name="" method="post" action="" enctype="multipart/form-data">
            <center>
                <table style="width:50%;">
                            <tr><td>
                                  <h5>Category</h5>
                                  <input type="text" name="cat" placeholder="Enter Category name" required="" class="form-control"/><br/>
                                  <h5>Product Name</h5>
                                  <input type="text" name="product" placeholder="Enter Product name" required="" class="form-control"/><br/>
                                  <h5>Quantity</h5>
                                  <input type="number" name="quantity" placeholder="Enter Quantity" required="" class="form-control"/><br/>
                                   <h5>Price</h5>
                                  <input type="number" name="price" placeholder="Enter Product Price" required="" class="form-control"/><br/>
                                  <h5>Product Image</h5>
                                  <input type="file" name="image"  required="" class="form-control"/><br/>
                                    <input type="submit" name="reg" value="Add Product" class="btn btn-success btn-group-justified">
                        </td></tr>
                </table>
            </center>
        </form><br/><br/></div>
    </body>
</html>

<?php   

if(isset($_POST["reg"])){
    
    $fid=$_SESSION["farmerid"];
    $cat=$_POST["cat"];
    $product=$_POST["product"];
    $quantity=$_POST["quantity"];
    $price=$_POST["price"];
    
     $folder='../images/farmeritem/';
      $file=$folder.basename($_FILES['image']['name']);
      move_uploaded_file($_FILES['image']['tmp_name'],$file);
      
      require '../connection.php';
      
      $q1="select * from tbl_fproduct where fid='$fid' and category='$cat' and pname='$product'";
      $res=  mysql_query($q1);
      if(mysql_num_rows($res)>0){
         echo "<script>alert('Product Already Exists')</script>"; 
      }
 else {
          $q2="insert into tbl_fproduct (fid,category,pname,quantity,price,image) values ('$fid','$cat','$product','$quantity','$price','$file')";
          if(mysql_query($q2)==1){
             echo "<script>alert('Product Added')</script>";  
          }
 else {
     echo "<script>alert('Product Adding Failed')</script>"; 
 }
      }
      
      
    
}

?>