<?php
session_start();
if(!isset($_SESSION["email"])){
    header('location:../login.php');
}

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Kissan Connect</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Candid Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
<!-- stylesheet -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //stylesheet -->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<!-- //online fonts -->
<!-- font-awesome-icons -->
<link href="../css/font-awesome.css" type="text/css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
</head>
<body>
<div class="agileits_main">
<!-- header -->
<div class="w3_agile_logo">
	<h1 class="text-center"><a href="#">Kissan Connect</a></h1>
</div>
<!-- banner -->

<!-- menu -->
<nav class="navbar navbar-inverse ">
	<div class="container">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
		</button>
	<div class="collapse navbar-collapse top-nav w3l" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav linkEffects linkHoverEffect_11 custom-menu">
                    <li><a href="home.php"><span>home</span></a></li>
                    <li><a href="uploadfindings.php" ><span>Upload Findings</span></a></li>
                    <li class="agile_active"><a href="viewmyfindings.php"><span>My Findings</span></a></li>
                        <li><a href="../logout.php"><span>Logout</span></a></li>
		</ul>
	</div>
	</div>
</nav>
<!-- //menu -->
  </div>	
<!-- //banner -->	
<!-- home -->

<!-- //home -->
<!-- about -->
<div class="container" id="login"><br/><br/><br/>
            <h4 style="padding-top:.5em;">My Findings</h4><hr/>
        <?php
       
        require '../connection.php';
        
        $expertid=$_SESSION["expertid"];
        
        $q="SELECT * FROM `tbl_finding`
WHERE  expertid='$expertid' and (`tbl_finding`.`status`='0' or `tbl_finding`.`status`='1')";
                
                $res=  mysql_query($q);
                
                if(mysql_num_rows($res)==0){
                    echo "<h4 style='color:red;padding-top:5em;text-align:center;'>You Have not Uploaded Any Findings Yet</h4>";
                }
                else{ ?>
            <center><table class="table table-hover">
            <thead>
            <th>Note Name</th>
            <th>Description</th>
            <th>Uploaded Date</th>
            <th></th>
            <th></th>
            <th></th>
            </thead><tbody>
                <?php  
                while($row=  mysql_fetch_array($res)){
                    $name=  explode("/", $row["fnote"]);
                    echo "<tr>"
                    . "<td>".end($name)."</td>"
                    . "<td>$row[fdescri]</td>"
                     . "<td>$row[uplddate]</td>"
                         . "<td><a href='$row[fnote]' class='btn btn-success'>Download</a></td>"
                            . "<td><a href='removefindingprocess.php?id=$row[findingid]' class='btn btn-danger'>Remove</a></td>"
                     . "</tr>";
                }
                ?></tbody></table></center>
<?php                }
        
        
?></div>
    </body>
</html>