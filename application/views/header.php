<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title?> | Gayatin DC</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/customized.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/dataTables.bootstrap.css" /> 
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.js"></script>   
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>     
    <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script> 
    <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/additional-methods.min.js"></script>
  </head>

  <body>

<!--- start of navbar-->
      <div class="container page-container">
        <div class="page-content"> <!-- Will be closed at the footer -->
              <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                  <div class="container">            
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Gayatin Dental Clinic</a>
                      </div>
                
                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                                <li class="<?php if($num == 0): ?>active<?php endif;?>">
                                    <a href="<?php echo base_url();?>">Home</a>
                                </li>
                                
                                
                                <li class="<?php if($num == 1): ?>active<?php endif;?>">
                                    <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Clinic Schedule<span class="caret"></span></a> -->
                                    <a href="<?php echo base_url();?>calendar/display">Clinic Schedule</a>
                                  <!--   <ul class="dropdown-menu" role="menu">
                                        <li><a href="<?php echo base_url();?>pages/clinic_sched">View Clinic Schedule</a></li>
                                        <li><a href="<?php echo base_url();?>appointment/view_appointment_queue">View Appointment Queue</a></li>                  
                                    </ul> -->
                                </li>
                                <?php if($this->session->userdata('username')){?>
                                <li class="dropdown <?php if($num == 7): ?>active<?php endif;?>">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Appointments<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <!-- <li><a href="<?php echo base_url();?>appointment/new_appointment">Issue an Appointment</a></li> -->
                                         <li><a href="<?php echo base_url();?>appointment/view_upcoming_appointments">Upcoming Appointments</a></li>
                                        <li><a href="<?php echo base_url();?>appointment/view_appointment_queue">Pending Appointments</a></li>                  
                                    </ul>
                                </li>
                
                                <li class="dropdown <?php if($num == 2): ?>active<?php endif;?>">
                                    <a href="<?php echo base_url();?>cadmin/view_patients">Patient Profile</a>
                                </li>
            
                                <?php if($this->session->userdata('handler')){?>
                                          <li class="<?php if($num == 5): ?>active<?php endif;?>"><a href="<?php echo base_url();?>cadmin/view_staffs">Users</a></li>
                                      <?php }?>
                
                                <li id="logout" class="buzz-out"><a href="<?php echo base_url();?>cadmin/logout">Logout</a></li>
                                
                                <?php }?>
                                <?php if(!$this->session->userdata('username')){?>
                                  <!-- <li class="<?php if($num == 3): ?>active<?php endif;?>">
                                    <a href="<?php echo base_url();?>pages/clinic_sched">Clinic Schedule</a>
                                  </li> -->
                                  <!-- <li class="dropdown <?php if($num == 3): ?>active<?php endif;?>">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Clinic Schedule<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo base_url();?>calendar/display">View Schedule</a></li>
                                    </ul>
                                </li> -->
                
                                  <li class="<?php if($num == 6): ?>active<?php endif;?>">
                                    <a href="<?php echo base_url();?>pages/services">Services</a>
                                  </li>
                
                                  <li class="<?php if($num == 4): ?>active<?php endif;?>">
                                    <a href="<?php echo base_url();?>pages/about_us">About Us</a>
                                  </li>
                                <?php }?>
            
                                     <!-- sample dropdown -->
                                <!-- <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                  <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                  </ul>
                                </li> -->
                
                              
                      <!-- end of sample -->
            
                        </ul>                  
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
          </nav>
                <!--- end of navbar -->

