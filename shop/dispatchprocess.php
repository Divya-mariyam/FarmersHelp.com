<?php

if(isset($_GET["oid"])){
    
    require '../connection.php';
    $q="update tbl_order set status='2' where orderid='$_GET[oid]'";
    $res=  mysql_query($q);
    if($res==1){
        echo "<script>alert('Status Updated')</script>";
    }
 else {
        echo "<script>alert('Status Updation Failed')</script>";
 }
 echo "<script>window.location='vieworders.php';</script>";
}

?>