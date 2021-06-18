<?php
require '../connection.php';

$id=$_GET["id"];

if(mysql_query("update tbl_reward set status='1' where rewardid='$id'")==1){
    echo "<script>alert('Reward Removed');</script>";
}
else
{
     echo "<script>alert('Reward Removal Failed');</script>";
}
    echo "<script>window.location='viewrewards.php';</script>";