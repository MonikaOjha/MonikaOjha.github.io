<?php
$pid=$_GET['detail'];
$q="select * from product where pid='$pid'";
$res=mysqli_query($link,$q);
$a=mysqli_fetch_array($res);
?>


 <div class="center_content">
      <div class="center_title_bar"><?php echo $a['pro_name']; ?></div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="product_img_big"> <a href="javascript:popImage('images/big_pic.jpg','Some Title')" title="header=[Zoom] body=[&nbsp;] fade=[on]"><img src="admin/pimage/<?php echo $a['pid']; ?>.jpg" width="160" height="120"  alt="" border="0" /></a>
            <div class="thumbs"> <a href="#" title="header=[Thumb1] body=[&nbsp;] fade=[on]"><img src="admin/pimage/<?php echo $a['pid']; ?>.jpg"width="39" height="38" alt="" border="0" /></a> <a href="#" title="header=[Thumb2] body=[&nbsp;] fade=[on]"><img src="admin/pimage/<?php echo $a['pid']; ?>.jpg"width="39" height="38" alt="" border="0" /></a> <a href="#" title="header=[Thumb3] body=[&nbsp;] fade=[on]"><img src="admin/pimage/<?php echo $a['pid']; ?>.jpg" width="39" height="38" alt="" border="0" /></a> </div>
          </div>
          <div class="details_big_box">
            <div class="product_title_big"><?php echo $a['feature']; ?></div>
            <div class="specifications"> Disponibilitate: <span class="blue">In stoc</span><br />
             Category: <span class="blue"><?php echo $a['cat_name']; ?></span><br />
              Sub category: <span class="blue"><?php echo $a['scat']; ?></span><br />
              Brand <span class="blue"><?php echo $a['brand']; ?></span><br />
              Model <span class="blue"><?php echo $a['model']; ?></span><br />
              Color <span class="blue"><?php echo $a['color']; ?></span><br />
              Size <span class="blue"><?php echo $a['size']; ?></span><br />
             
            </div>
            <div class="prod_price_big"> <span class="price"><?php echo $a['price']; ?>$</span></div>
            <a href="tempcart.php?pid=<?php echo $a['pid']; ?>" class="addtocart">add to cart</a> <a href="#" class="compare">compare</a> </div>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>
      </div>