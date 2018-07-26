<?php
extract($_POST);
if(isset($feed))
{
	$q="INSERT INTO `feedback` (`id`, `name`, `email`, `mob`, `msg`, `dat`) VALUES (NULL, '$name', '$email', '$mob', '$msg', CURRENT_TIMESTAMP)";
	
	mysqli_query($link,$q);
	echo '<script>alert("send your request");location.href="index.php";</script>';	
	
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
              <label class="contact"><strong>Message:</strong></label>
              <textarea class="contact_textarea" name="msg" ></textarea>
            </div>
            <div class="form_row">  <input type="submit" name="feed" /> </div>
          </div>
        </div></form>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>