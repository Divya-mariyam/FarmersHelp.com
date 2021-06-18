<?php
session_start();
if(isset($_SESSION['otp'])){
    if($_POST["otp"]==$_SESSION["otp"]){
        unset($_SESSION["otp"]);
        $payee_email=$_SESSION["email"];
        $amount=$_SESSION["amt"];
        unset($_SESSION["amt"]);
        $paiddate=date('Y-m-d');
        $fid=$_SESSION["farmerid"];
        require '../connection.php';
        $q="insert into tbl_payment (payeeemail,amount,paydate) values ('$payee_email','$amount','$paiddate')";
        $q1="update tbl_order set status=1 where fid='$fid' and orderdate='$paiddate'";
        if(mysql_query($q)==1 and mysql_query($q1)==1){
            echo "<script>alert('Payment Successful');"
            . "window.location='myorders.php';</script>";
        }
        else
        {
             echo "<script>alert('Unable to process Payment.Please Try Again');"
            . "window.location='mycart.php';</script>";
        }
    }
    else{
        echo "<script>alert('Incorrect OTP');"
        . "window.location='mycart.php';</script>";
    }
}

?>