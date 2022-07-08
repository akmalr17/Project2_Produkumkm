<html>
<head>

</head>
<body>
	<?php 
		echo form_open_multipart('produk/do_upload');
	?>
	<input type="file" name="foto"/>
	<input type="submit" value="upload" />
	<?php 
		echo form_close();
		?>


 
 
</body>
</html>