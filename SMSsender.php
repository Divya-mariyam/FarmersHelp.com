<?php

echo "welcome";
//include 'connection.php';
/*$ob=new ConnectionClass();
$ob->connectDB();*/
$to="+91".$_REQUEST['num'];
$msg=$_REQUEST['msg'];
echo $msg;

$request =""; 
$param['method']= "sendMessage"; 
$param['send_to'] = $to; 
$param['msg'] = $msg; 
$param['userid'] = "2000022557"; 
$param['password'] = "54321@lcc"; 
$param['v'] = "1.1"; 
$param['msg_type'] = "TEXT"; 
$param['auth_scheme'] = "PLAIN"; 
foreach($param as $key=>$val) 
{ 
$request.= $key."=".urlencode($val); 
$request.= "&"; 
} 
$request = substr($request, 0, strlen($request)-1); 
$url = "http://enterprise.smsgupshup.com/GatewayAPI/rest?".$request; 
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$curl_scraped_page = curl_exec($ch); 
curl_close($ch);
/*$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://enterprise.smsgupshup.com/GatewayAPI/rest?".$request);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);*/
 $curl_scraped_page; 
echo "<script>alert('Message Sended Successfully.')</script>";
echo "<script>location.href='$_REQUEST[postback]'</script>";
?> 
