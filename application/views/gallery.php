<?php include 'parts/navbar.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
</head>
<body>
		<div class="container-fluid">
		<div class="container" >
			<h1 style="text-align: center;font-size: 50px;font-weight: bold;">Gallery</h1>
			<div class="row" style="text-align: center;margin-top: 20px;">
				<div class="col-md-2"></div>
				<div class="col-md-8">
						<div class="row" >
								
							<div class="col-md-4"><a style="font-size: 20px;font-weight: bold;" href="<?php echo base_url('index.php/Gallery/openAddImage'); ?>" type="button" class="btn btn-success"><i class="fas fa-plus-circle" style="padding: 10px;"></i>Add Images</a></div>	
							<div class="col-md-4"><a href="<?php echo base_url('index.php/Gallery/openUpdateImage'); ?>" style="font-size: 20px;font-weight: bold;" type="button" class="btn btn-info"><i style="padding: 10px;" class="far fa-edit"></i>Update Images</a></div>
							<div class="col-md-4"><a href="<?php echo base_url('index.php/Gallery/openDeleteImage'); ?>" style="font-size: 20px;font-weight: bold;" type="button" class="btn btn-danger"><i style="padding: 10px;" class="far fa-trash-alt"></i>Delete Images</a></div>

						</div>
						<div class="col-md-2"></div>
				
			</div>

		</div>

	</div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 20px;"> 
			  <ol class="carousel-indicators">
			 <?php 
					 for($i=0;!empty($datas[$i]);$i++)
    					{      
							echo '<li data-target="#myCarousel" data-slide-to="$i" class="active"></li>';
						}
		 			echo '<li data-target="#myCarousel" data-slide-to="0"></li>';
		 			
			  ?>
				</ol>
				<div class="carousel-inner">
				<?php

					 for($y=0;!empty($datas[$y]);$y++)
    					{      
							if($y==1)
		 				{
		 					echo '<div class="item active"> 
						      <img style="height:500px;width:100%;" alt="New York.$y" src="data:image;base64,'.$datas[$y]->photo.' ">
						    </div>';
		 				}
		 				else
		 				{
		 					echo '<div class="item">
						      <img style="height:500px;width:100%;" alt="New York.$y" src="data:image;base64,'.$datas[$y]->photo.' ">
						    </div>';
		 				}
						}
		 			
		 			
			  	?>
			  </div>

			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span> <!-- This is the previous button -->
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span><!-- This is the next button -->
			  </a>	
</div>
</div>

</body>
</html>