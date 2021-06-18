<?php

include '../connection.php';
$msg="";
if(isset($_GET["approve"])){
   
    $q="update tbl_login set status='1' where loginid='$_GET[id]'";
    if(mysql_query($q)==1){
        $msg="  Kissan Connect - Account Approved";
        echo "<script>alert('Approved');</script>";      
    }
    else
    {
        echo "<script>alert('Approval Failed');</script>";
    }
}
else
{
    $q="update tbl_login set status='2' where loginid='$_GET[id]'";
    if(mysql_query($q)==1){
        echo "<script>alert('rejected');</script>";
    }
    else
    {
        echo "<script>alert('rejection Failed');</script>";
    }
    
}
echo "<script>window.location='../SMSsender.php?num=9539878674&&msg=$msg&&postback=admin/approveexpert.php';</script>";