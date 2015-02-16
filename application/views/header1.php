<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title?> | Gayatin Dental Clinic Online Appointment and Billing System</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/dataTables.bootstrap.css" />  
    <link rel="icon" href="<?php echo base_url();?>assets/img/logo.ico"/>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.js"></script>
    
  </head>

  <body>
    <!--- START OF NAVBAR -->
   <header class="navbar navbar-inverse navbar-fixed-top main-header" role="banner">
        <div class="container">
           <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <span style="color:white;"><h3>GAYATIN DENTAL CLINIC</h3></span>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">

                      <li class="<?php if($num == 0): ?>active<?php endif;?>">
                        <a href="<?php echo base_url();?>">Home</a>
                      </li>
                      
                      <?php if($this->session->userdata('username')){?>
                      <li class="<?php if($num == 1): ?>active<?php endif;?>">
                        <a href="<?php echo base_url();?>cadmin/schedule">Schedule</a>
                      </li>

                      <li class="dropdown <?php if($num == 2): ?>active<?php endif;?>">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patient Profile</a>
                          <ul class="dropdown-menu">
                              <li><a href="<?php echo base_url();?>cadmin/new_patient">Create New Profile</a></li>
                              <li><a href="<?php echo base_url();?>cadmin/view_patients">View Profile</a></li>                       
                          </ul>
                      </li>
                      <?php if($this->session->userdata('handler')){?>
                            <li class="<?php if($num == 5): ?>active<?php endif;?>"><a href="<?php echo base_url();?>cadmin/view_staffs">Admin Panel</a></li>
                      <?php }?>
                      <li id="logout" class="buzz-out"><a href="<?php echo base_url();?>cadmin/logout">Logout</a></li>
                      
                      <?php }?>
                      <?php if(!$this->session->userdata('username')){?>
                      <li class="<?php if($num == 3): ?>active<?php endif;?>">
                        <a href="<?php echo base_url();?>pages/appointment">Appointment</a>
                      </li>

                      <li class="<?php if($num == 4): ?>active<?php endif;?>">
                        <a href="<?php echo base_url();?>pages/about_us">About Us</a>
                      </li>
                      <?php }?>
                </ul>
            </div>
        </div>
  </header>

                        
    <!--- END OF NAVBAR -->