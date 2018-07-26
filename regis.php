<?php

extract($_POST);
if(isset($sub))
{
	$pass=md5($pass);
	$q="insert into user values('$email','$pass','$name',$age,'$gender',$mob)";	
	if(mysqli_query($link,$q))
	{
		$msg= "user created";
	}
	else
	$msg= "user already exist";
	
}


?>
<div class="center_content">
      <div class="center_title_bar">Registration</div>



<form method="post">
  <table width="80%"  align="center" cellspacing="4" cellpadding="3">
    <tr>
      <th colspan="2" scope="row">Registration</th>
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
      <th scope="row">Enter name</th>
      <td><input type="text"required name="name" id="textfield3"></td>
    </tr>
    <tr>
      <th scope="row">Enter Age</th>
      <td><input type="number" required name="age" id="textfield4"></td>
    </tr>
    <tr>
      <th scope="row">Enter Gender</th>
      <td><input type="radio" name="gender" value="male" id="textfield6" checked>Male
      <input type="radio" value="female" name="gender" id="textfield7">Female</td>
    </tr>
    <tr>
      <th scope="row">Enter MObile</th>
      <td><input type="number"required name="mob" id="textfield5"></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="sub" id="textfield8"></th>
    </tr>
  </table>
</form>
</div>
