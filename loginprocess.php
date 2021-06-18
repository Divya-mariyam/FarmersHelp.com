<?php

if(isset($_POST["login"])){
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    require 'connection.php';
    
    $q1="select * from tbl_login where username='$username' and password='$password' and status='1'";
    $res1=  mysql_query($q1);
    if(mysql_num_rows($res1)==0){
    echo "<script>alert('Incorrect Username Or Password')</script>";
    echo "<script>window.location='index.php';</script>";
}
 else {
    $row1=  mysql_fetch_assoc($res1);
    session_start();
    $_SESSION["email"]=$username;
    if($row1["usertype"]=="admin"){
        echo "<script>window.location='admin/dashboard.php';</script>";
    }
    else if($row1["usertype"]=="expert"){
         echo "<script>window.location='expert/home.php';</script>";
    }
    else if($row1["usertype"]=="shop"){
         echo "<script>window.location='shop/home.php';</script>";
    }
    else if($row1["usertype"]=="farmer"){
         echo "<script>window.location='farmer/home.php';</script>";
    }
}
}

?>