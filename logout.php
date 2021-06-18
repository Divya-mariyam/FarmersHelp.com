<?php
session_start();
session_destroy();
echo "<script>alert('Logout Successful . See You Later');"
. "window.location='index.php';</script>";
?>
