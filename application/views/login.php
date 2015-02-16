<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Gayatin DC</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/customized.css" />
    <link rel="icon" href="<?php echo base_url();?>assets/img/logo.ico" />    
  </head>

  <body>
          <section id="main-slider" class="login-main-slider">
            <div id="loginbox" class="login-loginbox mainbox col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0">                    
                    <div class="panel panel-info" >
                            <div class="panel-heading">
                                <div class="panel-title">
                                Gayatin Dental Clinic
                                <a class="fget-pword-link" href="<?php echo base_url();?>cadmin/forgot_pass">Forgot password?</a>
                                </div>
                                
                            </div>   
                            
                            <span class="login-errormsg"><?php echo $message;?></span>
                            <div class="panel-body login-panel-body" >

                                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                   
                                <form action="<?php echo base_url();?>cadmin/login" class="form-horizontal" method="post">    
                                    <div style="margin-bottom: 25px" class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                          <input class="form-control" type="text" name="user" placeholder="Username" aria-label="Username">                                        
                                    </div>
                                        
                                    <div style="margin-bottom: 25px" class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                          <input class="form-control" type="password" name="pass" placeholder="Password" aria-label="Password">
                                    </div>

                                        <div style="margin-top:10px" class="form-group">
                                            <!-- Button -->
                                            <div class="col-sm-12 controls">
                                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                                            </div>
                                        </div> 
                                </form>
                            </div>                     
                    </div>  
            </div>
        </section>


