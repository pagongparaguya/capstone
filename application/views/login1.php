<?php $this->load->view('header', array('num' => 5, 'title' => 'STAFF LOGIN')); ?>
<section id="main-slider" style="margin:100px;">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Staff Login</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="<?php echo base_url();?>cadmin/forgot_pass">Forgot password?</a></div>
                    </div>    
                    <br> 
                    <span style="color: red; text-shadow: 1px 1px 0px #000000;"><?php echo $message;?></span>
                    <div style="padding-top:30px" class="panel-body" >

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

<?php $this->load->view('footer'); ?>


