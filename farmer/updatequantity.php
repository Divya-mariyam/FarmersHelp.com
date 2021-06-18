<?php
require '../connection.php';

if($_POST["operation"]=="add"){
    
$q="SELECT quantity FROM tbl_sproduct WHERE shopid='$_POST[shopid]'";
$res=  mysql_query($q);
$row=  mysql_fetch_array($res);
if($row["quantity"]<=1){
    echo "Product Out Of Stock";
}
 else {

     $q1="update tbl_order set quantity=quantity+1 where orderid='$_POST[orderid]'";
     $q2="update tbl_sproduct set quantity=quantity-1 where shopid='$_POST[shopid]'";
     if(mysql_query($q1)==1 and mysql_query($q2)==1){
         echo "Quantity Updated";
     }
 else {
          echo "Quantity Updation Failed";
     }
     
} 
}
else if($_POST["operation"]=="rem"){   
        
    $q="SELECT quantity FROM tbl_order WHERE orderid='$_POST[orderid]'";
$res=  mysql_query($q);
$row=  mysql_fetch_array($res);
      if($row["quantity"]==1){
      $res1=  mysql_query("delete from tbl_order where orderid='$_POST[orderid]'");
        echo "Product Removed";
}
else{
     $q1="update tbl_order set quantity=quantity-1 where orderid='$_POST[orderid]'";
     $q2="update tbl_sproduct set quantity=quantity+1 where shopid='$_POST[shopid]'";
   
     

     if(mysql_query($q1)==1 and mysql_query($q2)==1){
         echo "Quantity Updated";
     }
 else {
          echo "Quantity Updation Failed";
     }
     
}
}
?>