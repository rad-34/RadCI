<?php include 'parts/navbar.php';?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Schedule of Gramasewaka</title>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>">
	</script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>">
	</script>	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin/bootstrap.css'); ?>">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	  rel="stylesheet">
</head>
<body>
	<div id="container" class="justify-content-center">			
		<div id="body" class="container jumbotron jumbotron-fluid justify-content-center">
			<div class="row">
				<div class="col-md-8">
					<h1>Schedule of Gramasewaka</h1>
				</div>
			<div class="col-md-2">
				<form method="POST" action="<?php echo base_url();?>index.php/Schedule_CI/enterNew" class="pull-right">
					<button type="submit" class="btn btn-warning btn-lg" style="margin-top:35px;" onClick="return confirm('Are you sure you want to Edit?')">Insert New</button>
				</div>
				<div class="col-md-2">
					<a class="btn btn-primary btn-lg pull-left" style="margin-top:35px;" href="<?php echo base_url();?>index.php/Public_CI/">Visit Website</a>
				</form>
				</div>
			</div>
				<table class="table table-striped black white-text table-hover col-xs-12 col-sm-12 col-md-12">
				<thead>
					<th>Date</th>
					<th>Time</th>
					<th>Location</th>
					<th>Description</th>
					<th>Action</th>
				</thead>
					<?php foreach ($tbl->result() as $row){ ?>
						<tr>
							<td><?php echo $row->Date ?></td>
							<td><?php echo $row->Time ?></td>
							<td><?php echo $row->Place?></td>
							<td><?php echo $row->Description?></td>
							<td>
								<div class="row ">
									<div class="col-md-2" >
									<form method="POST" action="<?php echo base_url();?>index.php/Schedule_CI/edit/<?php echo $row->SID ?>">
									<button type="submit" class="btn btn-outline-primary btn-info" onClick="return confirm('Are you sure you want to Edit?')"><i class="material-icons">edit</i></button>
								</form>
									</div>
									<div class="col-md-2" >
									<form method="POST" action="<?php echo base_url();?>index.php/Schedule_CI/delete/<?php echo $row->SID ?>">
									<button type="submit" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')"><i class="material-icons">delete_forever</i></button>
								</form>
									</div>
									<div class="col-md-8" ></div>
								
								
								</div>
							</td>
						</tr>
					<?php }; ?>		
				</table>
			</div>
	</div>
</body>
</html>