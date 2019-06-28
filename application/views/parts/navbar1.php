<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="<?php echo base_url(); ?>assets/fontawesome/css/all.css" rel="stylesheet">
<script defer src="<?php echo base_url(); ?>/assets/fontawesome/js/all.js"></script>
<link href="<?php echo base_url(); ?>assets/fontawesome/css/fontawesome.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/fontawesome/css/brands.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/fontawesome/css/solid.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url('index.php/home'); ?>">Meegahajanadura Gramaniladhari Devision</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/home'); ?>">Home</a></li>      
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/Gallery/loadImage'); ?>">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/peopledetails'); ?>">People Details</a></li>      
    </ul class="navbar-nav mr-auto">
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item"><a class="nav-link" href="#"><span class="fas fa-user" aria-hidden="true"></span> User</a></li>
      <li class="nav-item"><a class="nav-link" href="#"><span class="fas fa-sign-in-alt" aria-hidden="true"></span> Login</a></li>
    </ul>
  </div>
</nav>
