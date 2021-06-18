<?php

session_start();
$id=$_GET["pid"];
$shop=$_SESSION["shopid"];
require '../connection.php';

$res=  mysql_query("select * from tbl_sproduct where pid='$id' and shopid='$shop' and status='0'");
if(mysql_num_rows($res)>0){
    echo "<script>alert('This Product Already Exist Int The Cart');"
    . "window.location='home.php'</script>";
}
else
{
    echo "<script>window.location='pdetails.php?pid=$id';</script>";
}

