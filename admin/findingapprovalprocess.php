<?php

include '../connection.php';
if(isset($_GET["approve"])){
   
    $q="update tbl_finding set status='1' where findingid='$_GET[fid]'";
    if(mysql_query($q)==1){
        echo "<script>alert('Approved');</script>";      
    }
    else
    {
        echo "<script>alert('Approval Failed');</script>";
    }
}
else
{
    $q="update tbl_finding set status='2' where findingid='$_GET[fid]'";
    if(mysql_query($q)==1){
        echo "<script>alert('rejected');</script>";
    }
    else
    {
        echo "<script>alert('rejection Failed');</script>";
    }
    
}

echo "<script>window.location='approvefindings.php';</script>";