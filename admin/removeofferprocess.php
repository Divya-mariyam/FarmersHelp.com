<?php
require '../connection.php';

$id=$_GET["id"];

if(mysql_query("update tbl_offer set status='1' where offerid='$id'")==1){
    echo "<script>alert('Offer Removed');</script>";
}
else
{
     echo "<script>alert('Offer Removal Failed');</script>";
}
    echo "<script>window.location='viewoffers.php';</script>";