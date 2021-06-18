<?php
 require '../connection.php';
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
        $msg="  Kissan Connect - Account Rejected";
        echo "<script>alert('Rejected');</script>";
    }
    else
    {
        echo "<script>alert('Rejection Failed');</script>";
    }
    
}
echo "<script>window.location='../SMSsender.php?num=9539878674&&msg=$msg&&postback=admin/approveshop.php';</script>";