<?php
$q1="select * from tempcart where sid='$sid' and buy=0";
$result=mysqli_query($link,$q1);

?>

<div class="center_content">
      <div class="center_title_bar">CArt</div>





  
<table width="95%" cellspacing="2" cellpadding="2">
  <tr>
    <th scope="col">Sno</th>
    <th scope="col">Pro name</th>
    <th scope="col">pid</th>
    <th scope="col">quantity</th>
    <th scope="col">price</th>
    <th scope="col">total</th>
  </tr>
  <?php
  $s=1;
  if(mysqli_num_rows($result)>0)
{
	$total=0;
	$gtotal=0;
	while($a=mysqli_fetch_array($result))
	{
		$pid=$a['pid'];
		$q3="select pro_name,price from product where pid='$pid'";
		$res=mysqli_query($link,$q3);
		$arr=mysqli_fetch_array($res);
		$total=$arr['price']*$a['quantity'];
		$gtotal=$gtotal+$total;
   ?>
  <tr>
    <td><?php echo $s;?></td>
    <td><?php echo $arr['pro_name'];?></td>
    <td><?php echo $a['pid'];?></td>
    <td><?php echo $a['quantity'];;?></td>
    <td><?php echo $arr['price'];?></td>
    <td><?php echo $total;?></td>
  </tr>
  <?php 
	$s++;
	}
  }else
 {?>
 <tr colspan="6">
   <td><h1>No item for cart</h1></td>
  </tr>
  <?php }?>
  <tr>
    <td>Grand total:</td>
    <td><?php echo @$gtotal; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href="empty.php">EMpty cart</a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><a href="index.php">Continue</a></td>
    <td>&nbsp;</td>
    <td><a href="index.php?checkout=check">Check out</a></td>
  </tr>
</table>
<p>&nbsp;</p>
  </div>