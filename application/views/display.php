<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  /*This HTML file shows the all data of database and this is the 
  home page of post section. 
  When the Main_controller calls the Add_Post functoin this view is
  displaying in the front end*/


?><!DOCTYPE html>


<html lang="en">

<head>

    <title>Post Details</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>


<body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="container">
    
    <header class="page-header header container-fluide">
                <div class="overlay"></div>
                <div class="description">
                    <h1>Welcome to the Post Section!</h1>
                    
                    <button class="btn btn-outline-secondary btn-lg">Add New Post below..</button>
                    </div>

                    
    </header>
    
    <div class="container">
        <form action="<?php echo base_url()?>Main_Contoller/saved" method="Post">
            <div class="form-group">
                <label for="">Post Id</label>
                <input type="post_id" class="form-control" id="post_id" placeholder="post id">
            </div> 

            <div class="form-group">
                <label for="post_title">Post Title</label>
                <input type="post_title" class="form-control" id="post_title" placeholder="Enter Post Title Here..">
            </div>
            
    
            <div class="form-group">
                <label for="post">Post</label>
                <textarea class="form-control" id="post" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="">Date</label>
                <input type="date" class="form-control" id="date" placeholder="2015.05.06">
            </div>
            
            <div class="form-group">
                <label for="">Sender</label>
                <input type="sender" class="form-control" id="sender" placeholder="Sender">
                <input type = "submit" value="Add" name=add>
            </div>
    </form>
    </div>
</body>
</html>