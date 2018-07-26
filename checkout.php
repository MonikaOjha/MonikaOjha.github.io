<?php
if($_SESSION['item']!=1)
{
		echo '<script>alert("Plz something added to cart");location.href="index.php";</script>';
}
extract($_POST);
if(isset($check))
{
	$inv="inv".rand();
	$q="INSERT INTO `checkout` (`id`, `name`, `email`, `mobile`, `city`, `country`, `mode`, `address`, `invice`, `dat`) VALUES (NULL, '$name', '$email', '$mob', '$city', '$country', '$mode', '$address', '$inv', CURRENT_TIMESTAMP)";	
	
	if(mysqli_query($link,$q))
	{
		$q="update tempcart set buy=1,invice='$inv' where sid='$sid' and buy=0";
		mysqli_query($link,$q);
		echo '<script>alert("Thanku for shopping");location.href="index.php?thanku='.$inv.'";</script>';	
	}
	
}


?>


 <div class="center_content">
      <div class="center_title_bar">Contact Us</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big"><form method="post">
          <div class="contact_form">
            <div class="form_row">
              <label class="contact"><strong>Name:</strong></label>
              <input type="text" name="name" class="contact_input" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Email:</strong></label>
              <input type="email" class="contact_input" name="email" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Phone:</strong></label>
              <input type="text" class="contact_input" name="mob" />
            </div>
            
            <div class="form_row">
              <label class="contact"><strong>city:</strong></label>
              <input type="text" class="contact_input" name="city" />
            </div>
            <div class="form_row">
              <label class="contact"><strong>country:</strong></label>
              <input type="text" class="contact_input" name="country" />
            </div>
            <div class="form_row">
                <label class="contact"><strong>mode of payment:</strong></label>
              <select name="mode">
               <option value="cod" >COD</option>
             <option   value="bank" >BAnk transfer</option>
                <option  value="payment" >Payment gateway</option>
         </select>
            </div>
            <div class="form_row">
              <label class="contact"><strong>Address:</strong></label>
              <textarea name="address"></textarea>
            </div>
            <div class="form_row">  <input type="submit" name="check" /> </div>
          </div>
        </div></form>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>