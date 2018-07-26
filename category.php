<?php $cat=$_GET['cat'];?>

<div class="center_content">
      <div class="center_title_bar">Category <?php echo $cat; ?></div>

<?php 
$q="select * from product where cat_name='$cat' order by dat desc limit 0,9";
$res=mysqli_query($link,$q);
		
		while($a=mysqli_fetch_array($res))
		{
	   ?>



<div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="index.php?detail=<?php echo $a['pid']; ?>"><?php echo $a['pro_name']; ?></a></div>
          <div class="product_img"><a href="index.php?detail=<?php echo $a['pid']; ?>"><img src="admin/pimage/<?php echo $a['pid']; ?>.jpg"width="180" height="175" alt="" border="0" /></a></div>
          <div class="prod_price"> <span class="price"><?php echo $a['price']; ?>$</span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab"> <a href="tempcart.php?pid=<?php echo $a['pid']; ?>" title="header=[Add to cart] body=[&nbsp;] fade=[on]"><img src="images/cart.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Specials] body=[&nbsp;] fade=[on]"><img src="images/favs.gif" alt="" border="0" class="left_bt" /></a> <a href="#" title="header=[Gifts] body=[&nbsp;] fade=[on]"><img src="images/favorites.gif" alt="" border="0" class="left_bt" /></a> <a href="index.php?detail=<?php echo $a['pid']; ?>" class="prod_details">details</a> </div>
      </div>

<?php }?>

    </div>