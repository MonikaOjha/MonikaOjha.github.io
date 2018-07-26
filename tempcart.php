<?php
session_start();
$sid=session_id();
include('admin/db.php');
$pid=$_GET['pid'];

$q1="select * from tempcart where pid='$pid' and sid='$sid' and buy=0";
$result=mysqli_query($link,$q1);
if(mysqli_num_rows($result)>0)
{
$q="update tempcart set quantity=quantity+1  where pid='$pid' and sid='$sid'";	
}
else{
$q="INSERT INTO `online_ecom`.`tempcart` (`id`, `sid`, `pid`, `quantity`, `buy`, `invice`) VALUES (NULL, '$sid', '$pid', '1', '0', '')";
}
mysqli_query($link,$q);
echo '<script>alert("added to cart"); location.href="index.php";</script>';
?>