<?php $this->load->view('header', array('num' => 5, 'title' => 'Admin Accounts')); ?>
<!-- <<<<<<< HEAD -->
<div class="page-container">
    <div class="row element-container">
       <legend>Admin Accounts</legend>
       <!-- <div class="row">
        <div class="row row-content"> -->
       <!-- <br><br><a href="<?php echo base_url();?>cadmin/new_patient" class="button info">Add New Patient</a><br><br>  -->
       <a href="<?php echo base_url();?>cadmin/change_pass/<?php echo $this->session->userdata('id');?>"><button type="button" class="btn btn-info">Change Password</button></a>
        <br /><br />       
        <div class="col-lg-8 columns col-lg-offset-2"> 
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
            </thead>
                 
            <tbody>
              <?php foreach($staff as $stf): ?>
                <tr>
                    <td><?php echo $stf->firstname;?> <?php echo $stf->lastname;?></td>
                    <td><?php echo $stf->username;?></td>
                    <td>
                      <a style="text-decoration:none;" href="<?php echo base_url();?>cadmin/reset_password/<?php echo $stf->id;?>" onclick="return confirm('Are you sure to reset the password of <?php echo $stf->username;?> ?');"><!-- <img src="<?php echo base_url();?>assets/img/edit.png"> -->Reset Password</a>
                        |
                      <a style="text-decoration:none;" href="<?php echo base_url();?>cadmin/delete_staff/<?php echo $stf->id;?>" onclick="return confirm('Are you sure to delete <?php echo $stf->username;?> ?');"><!-- <img src="<?php echo base_url();?>assets/img/edit.png"> -->Remove</a>
                    </td>
                    <!-- <td><a href="<?php echo base_url();?>cadmin/edit_patient/<?php echo $stf->id;?>"><img src="<?php echo base_url();?>assets/img/edit.png">REMOVE</a></td> -->
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>
          <a href="<?php echo base_url();?>cadmin/new_staff"><button id="add" type="button" class="btn btn-info">Add New Staff</button></a>
        </div>
        
      
      
        <!-- <div id="stfmod" class="modal fade bs-example-modal-lg">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="background-color: #e7e5e3;">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                        <div id="timediv" class="modal-body">
                             <div class="col-md-12 columns">            
                    <div class="col-md-3 columns"></div>
                    <div class="col-md-6 columns">
                      <legend>Create Admin Account</legend> 
                      <form method="post" action="<?php echo base_url();?>cadmin/add_patient" role="form">
                      
                          <div>
                            <span><h5>Personal Information</h5></span>
                            <input class="form-control" name="fname" type="text" placeholder="First Name" required/><br>
                            <input class="form-control" name="lname" type="text" placeholder="Last Name" required/><br>
                          </div>
                    
                          <div >
                            <span><h5>Account Information</h5></span>
                            <input class="form-control" name="username" type="text" placeholder="Username" required/><br>
                            <input class="form-control" name="password" type="text" placeholder="Password" required/><br>
                            <input class="form-control" name="confirm_password" type="text" placeholder="Confirm password" required/><br>
                          </div>  
                        <button type="submit" class="btn btn-info">SUBMIT</button>
                      </form>
                    </div>
                    <div class="col-md-3"></div>
                  </div>
                        </div>
                   <div class="modal-footer">
                      <br><br>
                  </div>
                 </div>
            </div>
        </div>  -->
      
      
      
        <!-- </div>
        </div> -->
      </div>
</div>

<?php $this->load->view('footer'); ?>
<!-- =======
<section id="main-slider" style="margin:100px;">
    <legend>Admin Accounts</legend>
     <a href="<?php echo base_url();?>cadmin/edit_staff/<?php echo $this->session->userdata('id');?>"><button type="button" class="btn btn-info">Customize Profile</button></a>
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
        <thead>
            <tr>
                <th>Name</th>
                <th>Contact No.</th>
                <th>Action</th>
            </tr>
        </thead>
 
        <tbody>
          <?php foreach($staff as $stf): ?>
            <tr>
                <td><?php echo $stf->firstname;?> <?php echo $stf->lastname;?></td>
                <td><?php echo $stf->username;?></td>
                <td>
                  <a style="text-decoration:none;" href="<?php echo base_url();?>cadmin/edit_staff/<?php echo $stf->id;?>">EDIT</a>
                    |
                  <a style="text-decoration:none;" href="<?php echo base_url();?>cadmin/delete_staff/<?php echo $stf->id;?>" onclick="return confirm('Are sure to delete ?');">REMOVE</a>
                </td>
            </tr>
          <?php endforeach;?>
        </tbody>
      </table>
      <a href="<?php echo base_url();?>cadmin/new_staff"><button id="add" type="button" class="btn btn-info">Add New Staff</button></a>

    </section> -->

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').dataTable();
        // $('#add').click(function(){
        //   $('#stfmod').modal({backdrop: 'static',keyboard: false}); 
        //   $('#stfmod').modal('show');
        // });
    } );
</script>
