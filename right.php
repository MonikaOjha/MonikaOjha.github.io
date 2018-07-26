<?php
$q="select * from tempcart where sid='$sid' and buy=0";
$res=mysqli_query($link,$q);
$item=0;
$total=0;
while($a=mysqli_fetch_array($res))
{
	$pid=$a['pid'];
	$quantity=$a['quantity'];
	$q1="select price from product where pid='$pid'";
	$res1=mysqli_query($link,$q1);
	$a2=mysqli_fetch_array($res1);
	$price=$a2['price'];
	$item=$item+$quantity;
	$total=$total+$price*$quantity;	
	
}
if($item>0)
$_SESSION['item']=1;
else
$_SESSION['item']=0;

?>


 <div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title">Shopping cart</div>
        <div class="cart_details"> <?= @$item;?> items <br />
          <span class="border_cart"></span> Total: <span class="price"><?= @$total; ?>$</span> </div>
        <div class="cart_icon"><a href="index.php?checkout=1" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
      <div class="title_box">What’s new</div>
      <div class="border_box">
        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="images/p2.gif" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
      <div class="title_box">Brands</div>
      <ul class="left_menu">
       <?php
	  	$q="select distinct brand from product";
		$res=mysqli_query($link,$q);
		
		while($a=mysqli_fetch_array($res))
		{
	   ?>
      
      
        <li class="odd"><a href="index.php?brand=<?php echo $a['brand'];?>"><?php echo $a['brand'];?></a></li>
       
       
       <?php } ?>
   
      </ul>
      
      </div>