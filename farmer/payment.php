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
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/w3.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script>
        function sendotp(){
            if($('#accnum').val()=="" || $('#pass').val()=="" || $('#date').val()==""){
                alert('All Fields Required');
            }
            else{
            $.ajax({
                type:"post",
                url:"otpsender.php",
                success:function(data){
                    $('#payeedata').hide();
                    $('#otpform').show();
                    $('#response').html(data);
                }
            })
        }
    }</script>
        <?php session_start();
        $_SESSION["amt"]=$_GET["amt"];
        ?>
    </head>
    <body>
        <div id="response"></div>
        <div class="container-fluid">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 w3-card-4">
                <h3>Online SBI - Payment Gateway</h3>
                <div id="payeedata">
                    <center><table style="width:100%;"><tr><td>
                                    <h5>Debit Card Number</h5>
                                    <input type="text" name="accnum"  class="form-control" required="" id="accnum"/><br/>
                            <h5>CVV</h5>
                            <input type="password" name="cvv"   class="form-control" required="" id="pass"/><br/>
                             <h5>Expiry Date</h5>
                             <input type="date" name="date"  class="form-control" required="" id="date"/><br/>
                             <input type="submit" name="otpsend" value="Send OTP" class="btn btn-primary btn-group-justified" onclick="sendotp()"/><br/></td></tr>
                        </table></center>
                </div>
                <div id="otpform" style="display:none;">
                    <form method="post" action="paymentprocess.php">
                      <center><table style="width:100%;"><tr><td>
                     <h5>CVV</h5>
                     <input type="password" name="otp" placeholder="Enter Recieved OTP"  class="form-control" required=""/><br/>
                     <input type="submit" name="submit" value="Pay Now" class="btn btn-primary btn-group-justified"/><br/></td></tr></table></center></form>
                </div>
            <div class="col-sm-4"></div>
            </div>
    </body>
</html>
