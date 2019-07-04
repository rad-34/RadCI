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
  
<body>

<br>
<h3 align="center">People Details</h3>
<br>

<!-- People's data table -->
<div class="container">
<div class="row">
    <div class="col-md-6">
    <h3 align="center"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#insertModal">Insert a person</button></h3>
    </div>
    <div class="col-md-6">
    
        <a href="<?php echo base_url('index.php/PeopleDetails/pdf');?>" class="btn btn-success btn-sm">Print the Details</a>
    </div>
</div>



    <div class="row">
        <div class="col shadow-sm bg-white h-100">
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="material-icons">search</i></span>
        </div>        
        <input type="text" class="form-control" name="search" id="search" onkeyup="searchFunction()" placeholder="Search by NIC" style="width: 50%;" >
        </div>
            <table class="display" id="table1">
                <thead>
                <tr>
                    <th>NIC</th>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Job</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr class="tr-shadow">

                    <?php foreach ($h->result() as $row){?>
                <tr>
                    <td><?php echo $row->NIC;?></td>
                    <td><?php echo $row->full_name;?></td>
                    <td><?php echo $row->address;?></td>
                    <td><?php echo $row->phone_number;?></td>
                    <td><?php echo $row->job;?></td>
                    <td><?php echo $row->role;?></td>
                    <td><?php echo $row->status;?></td>

                    <td>
                        <p style="margin:0;">
                            <a href="<?php echo base_url();?>/index.php/peopledetails/view_by_id/<?php echo $row->id?>">
                                <button type="button" class="btn btn-outline-secondary btn-sm" id="delete" style="border:0;" >
                                <i class="material-icons">account_circle</i>
                                </button>
                            </a>

                            <a href="" data-toggle="modal" data-target="#exampleModal">
                                <button type="button" class="btn btn-outline-primary btn-sm" id="edit" data-toggle="modal" data-target="#updateModal" style="border:0;">
                                <i class="material-icons">edit</i>
                                </button>
                            </a>

                            <a href="<?php echo base_url();?>/index.php/peopledetails/people_delete/<?php echo $row->NIC?>">
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
        </div>
    </div>
</div>

<!-- Insert view popup -->
<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="<?php echo base_url();?>index.php/peopledetails/people_add" method="post" id="insert-form">
                <div class="form-label">
                    <label for="nic">NIC</label>
                    <input type="text" class="form-control" name="insert_nic"  id="insert_nic" placeholder="Enter NIC">
                </div>
                <br>
                <div class="form-label">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="insert_name" id="insert_name" placeholder="Enter Full Name">
                </div>
                <br>
                <div class="form-label">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="insert_address" id="insert_address" placeholder="Enter Address">
                </div>
                <br>
                <div class="form-label">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" name="insert_phone_no"  id="insert_phone_no" placeholder="Enter Phone No">
                </div>
                <br>
                <div class="form-label">
                    <label for="job">Job</label>
                    <input type="text" class="form-control" name="insert_job"  id="insert_job" placeholder="Enter the Job">
                </div>
                <br>
                <div class="form-label">
                    <label for="role">Role</label>
                    <select class="form-control" name="insert_role" id="insert_role">
                        <option value="M">M - Member</option>
                        <option value="A">A - Admin</option>
                    </select>
                </div>
                <br>
                <div class="form-label">
                    <label for="status">Status</label>
                    <select class="form-control" name="insert_status" id="insert_status">
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </select>
                </div>
                <br>
                <div class="form-label">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="insert_password"  id="insert_password" placeholder="Enter the Password">
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
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        
            <form action="<?php echo base_url();?>index.php/peopledetails/people_update" method="post" id="insert-form">
                <div class="form-label">
                    <label for="nic">NIC</label>
                    <input type="text" class="form-control" name="edit_nic"  id="edit_nic" placeholder="Enter NIC">
                </div>
                <br>
                <div class="form-label">
                    <label for="nic">Full Name</label>
                    <input type="text" class="form-control" name="edit_name" id="edit_name" placeholder="Enter Name">
                </div>
                <br>
                <div class="form-label">
                    <label for="nic">Address</label>
                    <input type="text" class="form-control" name="edit_address" id="edit_address" placeholder="Enter Address">
                </div>
                <br>
                <div class="form-label">
                    <label for="nic">Phone Number</label>
                    <input type="text" class="form-control" name="edit_phone_no"  id="edit_phone_no" placeholder="Enter Phone No">
                </div>
                <br>
                <div class="form-label">
                    <label for="job">Job</label>
                    <input type="text" class="form-control" name="edit_job"  id="edit_job" placeholder="Enter the Job">
                </div>
                <br>
                <div class="form-label">
                    <label for="role">Role</label>
                    <!-- <input type="text" class="form-control" name="edit_role"  id="edit_role" placeholder="Enter the Role"> -->
                    <select class="form-control" name="edit_role" id="edit_role">
                        <option value="M">M - Member</option>
                        <option value="A">A - Admin</option>
                    </select>
                </div>
                <br>
                <div class="form-label">
                    <label for="status">Status</label>
                    <!-- <input type="text" class="form-control" name="edit_status"  id="edit_status" placeholder="Enter the Status"> -->
                    <select class="form-control" name="edit_status" id="edit_status">
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </select>
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

    document.getElementById("insert_status").defaultValue = "1";
    document.getElementById("insert_role").defaultValue = "M";

    var table = document.getElementById('table1');

    for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
            document.getElementById("edit_nic").value = this.cells[0].innerHTML;
            // document.getElementById("profileNic").innerText = this.cells[0].innerHTML;
            document.getElementById("edit_name").value = this.cells[1].innerHTML;
            // document.getElementById("profileName").innerText = this.cells[1].innerHTML;
            document.getElementById("edit_address").value = this.cells[2].innerHTML;
            // document.getElementById("profileAddress").innerText = this.cells[2].innerHTML;
            document.getElementById("edit_phone_no").value = this.cells[3].innerHTML;
            // document.getElementById("profilePhone").innerText = this.cells[3].innerHTML;
            document.getElementById("edit_job").value = this.cells[4].innerHTML;
            document.getElementById("edit_role").value = this.cells[5].innerHTML;
            document.getElementById("edit_status").value = this.cells[6].innerHTML;
        };
    }

    // document.querySelector('#update-form').addEventListner()

    // document.getElementById("btnUpdate").onclick

    $(document).ready( function () {
        $('#table1').DataTable();
        searching: true;
    } );

        
</script>

<script>
    function searchFunction() {
    // Declare variables 
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    table = document.getElementById("table1");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        } 
    }
    }
</script>

</body>

</html>