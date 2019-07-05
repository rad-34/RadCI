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
<div id="container" class="jumbotron form-group col-xs-12 col-sm-12 col-md-12" >
	<legend class="col-lg-10 col-lg-offset-2">Enter New Schedule</legend>
		<form class="form-horizontal" method=POST action="<?php base_url();?>submit">
		<div class="form-group col-xs-12 col-sm-12 col-md-12">
			<div class="form-group col-xs-12 col-sm-12 col-md-12">
				<label for="inputDate" class="col-lg-2 control-label">Date</label>
				<div class="col-lg-10">
					<input type="date" name="inputDate" class="form-control">
				</div>
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-md-12">
				<label for="inputTime" class="col-lg-2 control-label">Time</label>
				<div class="col-lg-10">
					<input type="time" name="inputTime" class="form-control">
				</div>
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-md-12">
				<label for="inputPlc" class="col-lg-2 control-label">Place</label>
				<div class="col-lg-10">
					<input type="text" name="inputPlc" class="form-control" placeholder="Place">
				</div>
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-md-12">
				<label for="inputDesc" class="col-lg-2 control-label">Description</label>
				<div class="col-lg-10">
					<input type="text" name="inputDesc" class="form-control" placeholder="Description">
				</div>
			</div>
			<div class="form-group col-xs-12 col-sm-12 col-md-12">
				<div class="col-lg-10 col-lg-offset-2">
					<input type="submit" value="Submit" class="btn btn-success btn-lg">
					<a class="btn btn-primary btn-lg pull-left" href="<?php echo base_url('index.php/Schedule_CI');?>">Back</a>
				</div>
			</div>
		</div>
		</form>
	
</div>
</body>
</html>