<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
    <!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->
    
    <!-- Ativando o jQuery lightBox plugin -->
    <script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
    </script>
     <div class="center_content">
<div class="center_title_bar">Gallery</div>
 <div id="gallery">
 <?php
 $sc=scandir("gallery");
 foreach($sc as $s)
 {
	if($s!="." && $s!=".." && $s!="Thumbs.db")
	{
	$path="gallery/$s";
	?>
 <a href="<?php echo $path;?>"><img src="<?php echo $path;?>" width=150 height=150 border=2/></a>   
    <?php	
	}
 }
 ?>
 </div></div>