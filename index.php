<?php 
session_start();
$sid=session_id();
include('admin/db.php');

include('header.php');?>
    <!-- end of oferte_content-->
  <?php include('menu.php');?>
    <!-- end of menu tab -->
    <?php include('left.php');?>
    <!-- end of left content -->
    <?php 
	
	if(isset($_GET['cat']))
		include('category.php');
	else if(isset($_GET['brand']))
		include('brand.php');
	else if(isset($_GET['thanku']))
		include('thanku.php');
	else if(isset($_GET['gallery']))
		include('gallery.php');
	else  if(isset($_GET['detail']))
		include('detail.php');
		else  if(isset($_GET['checkout']))
		include('checkout.php');
		else  if(isset($_GET['cart']))
		include('cart.php');
		else  if(isset($_GET['regis']))
		include('regis.php');
		else  if(isset($_GET['login']))
		include('login.php');
		else  if(isset($_GET['contact']))
		include('contact.php');
		else  if(isset($_GET['service']))
		include('service.php');
		else  if(isset($_GET['About']))
		include('about.php');
		else  if(isset($_GET['search']))
		include('search.php');
	else 
	include('center.php');
	
	?>
    <!-- end of center content -->
   <?php include('right.php');?>
    <!-- end of right content -->
<?php include('footer.php');?>
  <!-- end of main content -->
  