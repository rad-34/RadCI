<?php include 'parts/navbar.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	
</head>
<body>
	<div class="container">
 	<form method="post" enctype="multipart/form-data" >
 		<br>
 		<?php 
 			 if(isset($_POST['submit1']))
 			 {
 					$id1=$_POST['id'];
 					echo '<input type="hidden" name="iddd" value='.$id1.'> ';
 			 }
 		
 		echo '<input type="file" name="image">
 		<br>
 		<br>
 		<input type="submit" name="submit" value="Upload">
 		';
 		

?>
 	</form>
 	<?php 
 			if(isset($_POST['submit']))
 		{
 			if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
 			{
 				echo "Please select an image.";
 			}
 			else
 			{
 				$iddddd=$_POST['iddd'];
 				$image=addslashes($_FILES['image']['tmp_name']);
 				$name=addslashes($_FILES['image']['name']);
 				$image=file_get_contents($image);
 				$image=base64_encode($image);
 				updateimage($name,$image,$iddddd);
 			}
 		}
 	?>
 	</div>
 	<div class="container">
 	<?php 
 	
 		
 		function updateimage($name,$image,$id)//update Function
 		{
 			$con1=mysqli_connect("localhost","root","","rad");
 			if ($con1) {
 				//echo "Connection Success";
 			}else
 			{
 				echo "Connection Failed";
 			}
 			
 			$query1="UPDATE gallery SET name='$name',photo='$image' WHERE id=$id";//update query
 			$result1=mysqli_query($con1,$query1);
 			if($result1)
 			{
 				echo "<br>Image Updated";
 			}
 			else
 			{
 				echo "<br>Image not Updated";
 			}
 		}

 		

 	?>
 	</div>

</body>
</html>