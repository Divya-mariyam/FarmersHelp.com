<?php
require '../connection.php';

$id=$_GET["id"];

if(mysql_query("update tbl_finding set status='1' where findingid='$id'")==1){
    echo "<script>alert('Finding Removed');</script>";
}
else
{
     echo "<script>alert('Finding Removal Failed');</script>";
}
    echo "<script>window.location='viewmyfindings.php';</script>";