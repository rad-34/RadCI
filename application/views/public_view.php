<?php include 'parts/navbar1.php';?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Schedule of Gramasewaka</title>

    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>">
	</script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>">
	</script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/public/bootstrap.css'); ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>

<!-- <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php base_url('index.php/Public_CI/') ?>">Meegahajandura Village</a>
        
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php base_url('index.php/Schedule _CI/') ?>">Gramasewaka Schedule<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Gallery<span class="sr-only"></span></a></li>
            <li><a href="#">Posts<span class="sr-only"></span></a></li>
            <li><a href="#">People's Details<span class="sr-only"></span></a></li>
        </ul>
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Person<i class="material-icons">person_outline</i></a></li>
      </ul>
    </div>
    </div>
    </div>
</nav> -->

<div id="container" class="container jumbotron jumbotron-fluid justify-content-center">
	<h1>Schedule of Gramasewaka</h1>

	<div id="body">
		<table class="table table-striped table-hover form-group col-xs-12 col-sm-12 col-md-12">
        <thead>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
            <th>Description</th>
        </thead>
			<?php foreach ($tbl->result() as $row){ ?>
				<tr>
					<td><?php echo $row->Date ?></td>
					<td><?php echo $row->Time ?></td>
					<td><?php echo $row->Place?></td>
					<td><?php echo $row->Description?></td>
				</tr>
			<?php }; ?>
		
		</table>
    </div>
</div>
</body>
</html>