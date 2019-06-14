<?php include 'parts/navbar1.php';?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Gallery</title>
 	
 <body>
 <div class="container">
 <form method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/Gallery/openAddImage'); ?>">
 		<br>
 		<input type="file" name="image">
 		<br>
 		<br>
 		<input type="submit" name="submit" value="Upload">


 	</form>
 	
 	</div>
 	<div class="container">
 	<?php 
				 
 		
			 for($y=0;!empty($datas[$y]);$y++)
				{
					echo '<img height="300" width="300" src="data:image;base64,'.$datas[$y]->photo.' ">';//this statement we can dispaly the all the images
				}
 			
 		

 	?>
  </div>
 </body>
 </html>