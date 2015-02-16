<?php $this->load->view('header', array('num' => 0, 'title' => 'FORGOT PASSWORD')); ?>
<div id="loginbox" class="page-container mainbox col-md-6 col-md-offset-3 col-sm-12">                    
        <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Forgot Password</div>
                </div>     

                <div style="padding-top:30px" class="panel-body" >
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>                       
                    <form action="#" class="form-horizontal" method="post">                                    
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-remove-circle"></i></span>
                            <input class="form-control" type="text" name="mobile" placeholder="Mobile Number" pattern="[9][0-9]{9}" aria-label="Mobile Number">                                        
                        </div>
                        <div style="margin-top:10px" class="form-group">
                            <div class="col-sm-12 controls">
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Submit">
                            </div>
                        </div> 
                    </form>     
                </div>                     
        </div>  
</div>


<?php $this->load->view('footer'); ?>


