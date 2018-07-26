<div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>
    <div class="left_content">
      <div class="title_box">Categories</div>
      <ul class="left_menu">
      
      <?php
	  	$q="select distinct cat_name from product";
		$res=mysqli_query($link,$q);
		
		while($a=mysqli_fetch_array($res))
		{
	   ?>
      
      
        <li class="odd"><a href="index.php?cat=<?php echo $a['cat_name'];?>">
		<?php echo $a['cat_name'];?></a></li>
       
       
       <?php } ?>
       
      </ul>
      <div class="title_box">Special Products</div>
      <div class="border_box">
        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="images/laptop.png" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
	  <div class="border_box">
        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="images/laptop.png" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
         </div>