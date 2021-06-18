<?php
require '../connection.php';

$spid=$_GET["spid"];

if(mysql_query("update tbl_sproduct set status='1' where spid='$spid'")==1){
    echo "<script>alert('Product Removed');</script>";
}
else
{
     echo "<script>alert('Product Removal Failed');</script>";
}
    echo "<script>window.location='home.php';</script>";