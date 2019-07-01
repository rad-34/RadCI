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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

  </head>
</html>

<body>

<br>
<h3 align="center">Profile Details</h3>
<div class="container">

    <div class="row">
        <div class="col ">
            <div class="shadow-sm bg-white h-100">
                <div class="border-bottom p-4">
                    <div class="text-center">
                        <img class="mb-3 rounded-pill shadow-sm mt-1" width="300" height="300" src="<?php echo base_url();?>uploads/<?php echo $h->NIC;?>.jpg" alt="Profile picture" style="img-fluid">
                        <br>                        
                        <button type="button" class="btn btn-primary btn-sm" onclick="document.querySelector('#upload-button').click()">
                        Change the profile picture
                        </button>
                        <form id="upload" action="<?=base_url()."/index.php/ProfilePicUpload/do_upload/".$h->NIC."/".$h->id?>" method="post" enctype='multipart/form-data'>
                        <input type="file" name="userfile" size="20" style="display:none" id="upload-button" onchange="document.querySelector('#upload').submit()" />
                        </form>                   
                    
                        <div>
                            <h6 class="mb-2" id="profileName"><?php echo $h->full_name; ?></h6>
                            <p class="mb-1" id="profileJob"><?php echo $h->job; ?></p>
                            <p class="mb-1" id="profileNic"><?php echo $h->NIC; ?></p>
                            <p class="mb-1" id="profileAddress"><?php echo $h->address; ?></p>
                            <p class="mb-1" id="profilePhone"><?php echo $h->phone_number; ?></p>                                
                        </div>
                    </div>
                </div>                
            </div>           
        </div>

        <div class="col shadow-sm bg-white h-100">
            <div>
            <br><br>
            
            <h6 align="center" class="title-5 m-b-35">Family Members</h6>
            
            </div>
            <table class="table table-data2" id="table1">
                <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Relationship</th>
                    <th>Job</th>
                    <th>Placeholder</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr class="tr-shadow">

                    <?php foreach ($f->result() as $row){ ?>
                <tr>
                    <td><?php echo $row->name;?></td>
                    <td><?php echo $row->relationship;?></td>
                    <td><?php echo $row->job;?></td>
                    <td><?php echo $row->house_holder_id;?></td>
                    
                    <td>
                        <p style="margin:0;">
                            <a href="" data-toggle="modal" data-target="#exampleModal">
                                <button type="button" class="btn btn-outline-primary btn-sm" id="edit" data-toggle="modal" data-target="#updateModal" style="border:0;">
                                <i class="material-icons">edit</i>
                                </button>
                            </a>

                            <a href="<?php echo base_url();?>/index.php/peopledetails/people_delete/<?php echo $row->id?>">
                                <button type="button" class="btn btn-outline-danger btn-sm" id="delete" style="border:0;" onclick="return confirm('Are you sure you want to delete?')">
                                <i class="material-icons">delete_forever</i>
                                </button>
                            </a>
                        </p>                        
                    </td>
                </tr>
                    <?php } ?>
                </tbody>
            </table>
            <h3 align="center"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#insertModal">Insert a family member</button></h3>
   
        </div>
    </div>     
</div>

<!-- Insert view popup -->
<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?php echo base_url();?>index.php/peopledetails/family_member_add" method="post" id="insert-form">
                
                <div class="form-label">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="insert_name" id="insert_name" placeholder="Enter Full Name">
                </div>
                <br>
                
                <div class="form-label">
                    <label for="phone">Relationship</label>
                    <input type="text" class="form-control" name="insert_relationship"  id="insert_relationship" placeholder="Enter Relationship">
                </div>
                <br>
                <div class="form-label">
                    <label for="job">Job</label>
                    <input type="text" class="form-control" name="insert_job"  id="insert_job" placeholder="Enter the Job">
                </div>
                <br>
                <div class="form-label">
                    <label for="job">House Holder ID</label>
                    <input type="text" class="form-control" name="insert_house_holder"  id="insert_house_holder" placeholder="Enter the HouseHolder ID">
                </div>
                <br>
                
                
                <button type="submit" id="btnInsert"  class="btn btn-info" name="btnInsert">Insert</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>                
            </form>        
        </div>        
    </div>
    </div>
</div>

<!-- Edit view popup -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog"  >
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        
            <form action="<?php echo base_url()."index.php/peopledetails/family_member_update/".$row->id;?>" method="post" id="insert-form">
                        
                
                <div class="form-label">
                    <label for="nic">Full Name</label>
                    <input type="text" class="form-control" name="edit_name" id="edit_name" placeholder="Enter Name">
                </div>
                <br>
               
                <div class="form-label">
                    <label for="nic">Relationship</label>
                    <input type="text" class="form-control" name="edit_relationship"  id="edit_relationship" placeholder="Enter Relationship">
                </div>
                <br>
                <div class="form-label">
                    <label for="job">Job</label>
                    <input type="text" class="form-control" name="edit_job"  id="edit_job" placeholder="Enter the Job">
                </div>
                <br>
                <div class="form-label">
                    <label for="job">House Holder ID</label>
                    <input type="text" class="form-control" name="edit_house_holder"  id="edit_house_holder" placeholder="Enter the Job">
                </div>
                <br>
                
                <button type="submit" id="btnUpdate"  class="btn btn-info" name="btnUpdate">Update</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>        
        </div>        
    </div>
    </div>
</div>


<script>
    var table = document.getElementById('table1');

    for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
            document.getElementById("edit_name").value = this.cells[0].innerHTML;
            document.getElementById("edit_relationship").value = this.cells[1].innerHTML;
            document.getElementById("edit_job").value = this.cells[2].innerHTML;
            document.getElementById("edit_house_holder").value = this.cells[3].innerHTML;
            document.getElementById("insert_house_holder").value = this.cells[3].innerHTML;
            
        };
    }
   
    
</script>

</body>

</html>