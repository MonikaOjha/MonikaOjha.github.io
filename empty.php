<?php
session_start();
$sid=session_id();
include('admin/db.php');
$q="delete from tempcart where sid='$sid' and buy=0";
mysqli_query($link,$q);
echo '<script>alert("Your cart is Empty"); location.href="index.php";</script>';

?>