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
 	
 	</div>
 	<div class="container">
 	
 	</div>

</body>
</html>