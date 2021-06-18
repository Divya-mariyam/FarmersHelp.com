<?php  
          $shopid=$_SESSION["shopid"];
      $q="SELECT * FROM `tbl_sproduct`
JOIN `tbl_allproduct` ON `tbl_allproduct`.`pid`=`tbl_sproduct`.`pid`
JOIN `tbl_category` ON `tbl_category`.`categoryid`=`tbl_allproduct`.`catid`
WHERE `tbl_sproduct`.`shopid`='$shopid' and `tbl_sproduct`.`status`='0'";
      $res=  mysql_query($q);
      if(mysql_num_rows($res)==0){
          echo "<h4 style='text-align:center;padding-top:5em;padding-bottom:5em;'>You Haven't Added Any Products To Your Shop</h4>";
      }
      else
      {   ?>
        <div class="row">
            <?php  while($row=  mysql_fetch_array($res)){   ?>
            <div class="col-sm-3">
                <div class="panel panel-success">
                    <div class="panel-heading"><?php  echo $row["pname"]   ?></div>
                    <div class="panel-body">
                <img src="<?php  echo $row["pimage"];  ?>" style="width:100%;height:200px;"/><br/><br/>
                <h4 style="text-align:center;">Selling price : Rs.<?php  echo $row["sellprice"];   ?>/-</h4>
                <h4 style="text-align:center;">Quantity : <?php  echo $row["quantity"];   ?> no.s</h4><br/><br/>
                <a href="editproduct.php?spid=<?php  echo $row["spid"];   ?>" class="btn btn-success btn-group-justified">Edit</a><br/>
                <a href="removeproductprocess.php?spid=<?php  echo $row["spid"];   ?>" class="btn btn-danger btn-group-justified">Remove</a>
                    </div></div></div>
            <?php } ?>
        </div>
      <?php  }
      
      
      ?>
