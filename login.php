<?php


extract($_POST);
if(isset($sub))
{
	$pass=md5($pass);
	$q="select * from user where email='$email' and password='$pass'";
	$result=mysqli_query($link,$q);	
	if(mysqli_num_rows($result))
	{
		$_SESSION['sid']=$email;
		header('location:index.php');
	}
	else
	$msg= "userid and password wrong";
	
}


?>
<div class="center_content">
      <div class="center_title_bar">Login</div>



<form method="post">
  <table width="80%" align="center" cellspacing="4" cellpadding="3">
    <tr>
      <th colspan="2" scope="row">Login</th>
    </tr>
    <tr>
      <th colspan="2" scope="row"><?php echo @$msg; ?></th>
    </tr>
    <tr>
      <th scope="row">Enter Email</th>
      <td><input type="email" name="email" id="textfield" required></td>
    </tr>
    <tr>
      <th scope="row">enter Pass</th>
      <td><input type="password"required name="pass" id="textfield2"></td>
    </tr>
      <tr>
      <th colspan="2" scope="row"><input type="submit" name="sub" id="textfield8"></th>
    </tr>
  </table>
</form>
</div>