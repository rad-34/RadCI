<?php include 'parts/navbar1.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link href="<?php echo base_url(); ?>/assets/css/theme.css" rel="stylesheet" media="all"> -->

    <link href='<?php echo base_url(); ?>/assets/calender/packages/core/main.css' rel='stylesheet' />
    <link href='<?php echo base_url(); ?>/assets/calender/packages/daygrid/main.css' rel='stylesheet' />

    <script src='<?php echo base_url(); ?>/assets/calender/packages/core/main.js'></script>
    <script src='<?php echo base_url(); ?>/assets/calender/packages/daygrid/main.js'></script>

  </head>
    <div class="container">
    <body>
      
    
    <div class="container">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        
            
        <h1 class="my-4" style="color:black;">Recent Posts</h1>
       
        
        <div class="container">
        <div class="row">
              <?php foreach($display->result() as $row){?> 
  
          <?php } ?> <br>
              <div class="card-column" > 
              
                <a href= "<?php echo base_url();?>index.php/Main_Controller/add/<?php echo $row->id?> " class="add"  ><button type="submit" class="btn btn-info" value="add" name="add">  Add New Post Here..</button></a>   <br>         
               
                    <?php
                  
                    echo "\n";
                          foreach($display->result() as $row){
                        
                            ?>   <br>         

                           <div class="card mb-4" style="width: 50rem; ">
                                <img style="width: 45rem; height: 18rem" class="card-img-top" src="<?php echo base_url('/assets1/img/postpic.jpg')?>" alt="Card image cap">
                                <div class="card-body">

                                  <h5 class="card-title"> <?php echo $row->title;?></h5>
                                  <p class="card-text"><?php echo $row->post;?></p>
                                </div>
                                <ul class="list-group list-group-flush">
                                  <!--<li class="list-group-item">Date   :   <?php echo $row->date;?></li>-->
                                  <li class="list-group-item">Sent By   :   <?php echo $row->sender;?></li>
                                  <!--<li class="list-group-item">Vestibulum at eros</li>-->
                                </ul>
                                <div class="card-footer text-muted">
                                                <li class="list-group-item">Date   :   <?php echo $row->date;?></li>

                          </div>
                                <div class="card-body">
                                  <a href= "<?php echo base_url();?>index.php/Main_Controller/deletedata/<?php echo $row->id?> " class="delete"  ><button type="submit" class="btn btn-danger" value="delete" name=delete>Delete</button></a>            
                                  <a href= "<?php echo base_url();?>index.php/Main_Controller/edit/<?php echo $row->id?> " class="update"  ><button type="submit" class="btn btn-warning" value="update" name=update>Edit</button></a>              
                                  
                                </div>
                            </div>
                             
                             <?php }  ?>
                   
                    <br>
                          </div>     
                        
 <!-- Sidebar Widgets Column 
 <div class="col-md-4">

<!-- Search Widget 
<div class="card my-4">
  <h5 class="card-header">Search</h5>
  <div class="card-body">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Go!</button>
      </span>
    </div>
  </div>
</div>

<!-- Categories Widget 
<div class="card my-4">
  <h5 class="card-header">Categories</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          <li>
            <a href="#">Web Design</a>
          </li>
          <li>
            <a href="#">HTML</a>
          </li>
          <li>
            <a href="#">Freebies</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          <li>
            <a href="#">JavaScript</a>
          </li>
          <li>
            <a href="#">CSS</a>
          </li>
          <li>
            <a href="#">Tutorials</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
---
<!-- Side Widget 
<div id="calendar">
  
</div>

</div>

</div>
<!-- /.row 

</div>-->



                          <script>

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'dayGrid' ]
  });

  calendar.render();
});

</script>
</div>
    </body>
            </div>
</html>