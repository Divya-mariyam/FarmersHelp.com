<?php   
session_start();
if(isset($_GET["pid"]) && isset($_GET["sid"])){
    
    $pid=$_GET["pid"];
    $fid=$_SESSION["farmerid"];
    $shopid=$_GET["sid"];
    $date=date('Y-m-d');
    
    require '../connection.php';
    
    $q="insert into tbl_order (fid,shopid,pid,quantity,orderdate) values ('$fid','$shopid','$pid','1','$date')";
    if(mysql_query($q)==1){
        echo "<script>alert('Product Added To Cart');"
     . "window.location='purchaseproducts.php';</script>"; 
    }
    else
    {
         echo "<script>alert('Failed To Add Product To Cart');"
     . "window.location='purchaseproducts.php';</script>";
    }
    
}
 else {
 echo "<script>alert('Failed To Add Product To Cart');"
     . "window.location='purchaseproducts.php';</script>";  
 }

?>