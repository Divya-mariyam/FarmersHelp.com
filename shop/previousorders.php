<?php session_start();    ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <style>
            body,html{
                background-image:url('../images/slider/adminbg.jpg');
                background-attachment:fixed;
                background-size:cover;
                background-repeat:no-repeat;
            }
            #body { background-color:#fff;padding-bottom:20em; }
            #link:active {  }
        </style>
    </head>
    <body>
          <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color:#0c8213;">Kissan Connect</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="addcategories.php">Category</a></li>
        <li ><a href="addproduct.php">New Product</a></li>
        <li><a href="productcatalog.php">Product Catalog</a></li>
        <li ><a href="myshopproducts.php">Existing Product</a></li>
        <li ><a href="vieworders.php">New Orders</a></li>
        <li class="active"><a href="previousorders.php">Previous Orders</a></li>
    <li><a href="../logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
        <div class="container" id="body">
     <?php      
     
     require '../connection.php';
     $shopid=$_SESSION["shopid"];
     $q="SELECT * FROM `tbl_order`
JOIN `tbl_farmer` ON `tbl_farmer`.`farmerid`=`tbl_order`.`fid`
 join tbl_allproduct on tbl_allproduct.pid=tbl_order.pid
WHERE tbl_order.`shopid`='$shopid' and tbl_order.status=2 order by orderid desc";
     $res=  mysql_query($q);
     if(mysql_num_rows($res)==0){
         echo "No Orders Recieved";
     }
     else
         {    ?><center><table class="table table-hover"><thead>
            <th>Customer</th>
            <th>Address</th>
            <th>Order Date</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Status</th>
            </thead><tbody><?php 
while($row=  mysql_fetch_array($res)){
     echo "<tr><td>$row[fname]</td>"
             . "<td>$row[faddr] <br/> $row[fdistrict] , $row[fstate]</td>"
             . "<td>$row[orderdate]</td>"
             . "<td>$row[pname]</td>"
             . "<td>$row[quantity]</td>"
             . "<td>Dispatched & Delivered</td>"
             . "</tr>";
} ?>
            </tbody></table></center>
                <?php
     }
     
     ?></div>
    </body>
</html>