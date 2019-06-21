<?php include 'parts/navbar1.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>People Details</title>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
</html>

<body>

<br>
<h3 align="center">Profile Details</h3>
<div class="container">

    <div class="row">
        <div class="col">
            <div class="shadow-sm bg-white h-100">
                <div class="border-bottom p-4">
                    <div class="text-center">
                        <img class="mb-3 rounded-pill shadow-sm mt-1" width="300" height="300" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Profile picture">
                        <br>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#insertModal">
                        Change the profile picture
                        </button>
                        <br><br>
                        <div>
                            <h6 class="mb-2" id="profileName"><?php echo $h->name; ?></h6>
                            <p class="mb-1" id="profileNic"><?php echo $h->nic; ?></p>
                            <p class="mb-1" id="profileAddress"><?php echo $h->address; ?></p>
                            <p class="mb-1" id="profilePhone"><?php echo $h->phone_no; ?></p>                                
                        </div>
                    </div>
                </div>                
            </div>           
        </div>
    </div>     
</div>

<br>




<script>

    
    
</script>

</body>

</html>