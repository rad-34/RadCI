<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  /*This HTML file shows the all data of database and this is the 
  home page of post section. 
  When the Main_controller calls the Add_Post functoin this view is
  displaying in the front end*/


?><!DOCTYPE html>


<html lang="en">

        <head>

                <title>Edit Post</title>
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
                                <br>
                                <h1>Edit Post</h1>
                                
                            
                            </div>

                                
                </header>
                <div class=container>
                <?php echo form_open('Main_Controller/update'); ?>
                        <div class="form-group">

                            
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $post->id;?>"placeholder="Enter Post Title Here..">

                        </div>


                        <div class="form-group">

                            <label for="title">Post Title</label>
                            <input type="title" class="form-control" name="title" id="post_title" value="<?php echo $post->title;?>"placeholder="Enter Post Title Here..">
                        
                        </div>
                        
                        
                
                        <div class="form-group">

                            <label for="post">Post</label>
                            <textarea class="form-control" name="post" id="post" rows="3" value="<?php echo $post->title;?>" placeholder="Enter Post Here.."></textarea>

                        </div>
                       <!-- <div class="form-group">
                <div class='form-group' id='datetimepicker2'>
                <label for="">Date</label>

                    <input type='timestamp-local' class="form-control" name="date" id="date" value="<?php echo $post->date;?> "placeholder="">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker2').datetimepicker({
                    locale: 'ru'
                });
            });
        </script>

                       <div class="form-group">

                            <label for="">Date</label>
                            <input type="datetime-local" class="form-control" name="date" id="date" value="<?php echo $post->date;?> "placeholder="">

                        </div>-->
                        
                        <div class="form-group">

                            <label for="">Sender</label>
                            <input type="sender" class="form-control" name="sender" id="sender" value="<?php echo $post->sender;?>" placeholder="Sender">
                            <br><br>
                            <a href= "<?php echo base_url();?>index.php/Main_Controller/update/<?php echo $post->id?> " class="add"  ><button type="submit" class="btn btn-warning" value="update" name="update">  Edit Post</button></a>             
                        </div>
                        

                        <?php echo form_close(); ?>
                </div>
                        
                    
            
        </body>
</html>