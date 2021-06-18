<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="">
            <center>
                <table>
                            <tr><td>
                                    <h5>Your Name</h5>
                                    <input type="text" name="fname" class="form-control" placeholder="Enter Full Name" required=""/><br/>
                                    <h5>Your Address</h5>
                                    <textarea name="faddr" class="form-control" placeholder="Enter Address" required=""></textarea><br/>
                                    <h5>District</h5>
                                    <input type="text" name="fdist" class="form-control" placeholder="Enter District name" required=""/><br/>
                                     <h5>State</h5>
                                    <input type="text" name="fstate" class="form-control" placeholder="Enter State name" required=""/><br/>
                                     <h5>Your Email Address</h5>
                                    <input type="email" name="femail" class="form-control" placeholder="Enter Email Address" required=""/><br/>
                                     <h5>Your Contact</h5>
                                     <input type="number" name="fcontact" class="form-control" placeholder="Enter Contact Number" required=""/><br/><br/>
                                     <input type="submit" name="reg" class="btn btn-success" value="Sign Up"/>
                        </td></tr>
                </table>
            </center>
        </form>
    </body>
</html>

<?php

if(isset($_POST["reg"])){
    
    $name=$_POST["fname"];
    $addr=$_POST["faddr"];
    $dist=$_POST["fdist"];
    $state=$_POST["fstate"];
    $email=$_POST["femail"];
    $contact=$_POST["fcontact"];
    
    require './connection.php';
    
    $q1="select * from tbl_farmer where femail='$email' or fcontact='$contact'";
    $res1=  mysql_query($q1);
      if(mysql_num_rows($res1)>0)
    {
           echo "<script>alert('Email Or Contact Already Exist')</script>";
    } 
 else {

     $q2="insert into tbl_farmer(fname,faddr,fdistrict,fstate,fcontact,femail) values ('$name','$addr','$dist','$state','$contact','$email')";
     $q3="insert into tbl_login (username,password,usertype,status) values ('$email','$contact','farmer','1')";
     
     if(mysql_query($q2)==1 && mysql_query($q3)==1){
         echo "<script>alert('Registration Success.Use Email & Mobile Number To Login')</script>";
     }
     else
     {
         echo "<script>alert('Registration Failed')</script>";
     }
        echo "<script>window.location='login.php'</script>";
    }
}

?>