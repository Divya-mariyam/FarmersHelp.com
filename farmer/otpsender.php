<?php
session_start();
$otp=rand(1000,9999);
$_SESSION["otp"]=$otp;
echo "<script>alert('OTP for your transaction is ".$otp."');</script>";
?>

