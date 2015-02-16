<?php $this->load->view('header', array('num' => 5, 'title' => 'Edit Admin Account')); ?>
<div class="row">		
					<div class="col-md-12 columns">						
						<div class="col-md-3 columns"></div>
						<div class="col-md-6 columns">
<!-- <<<<<<< HEAD -->
							<div class="element-container">
								<legend>Change Password</legend>	
								<form method="post" action="<?php echo base_url();?>cadmin/update_password" role="form">
														  			<input class="form-control" value="<?php echo $id;?>" name="staffid" type="hidden" />
														  			<input id="op" class="form-control" name="old_password" type="password" placeholder="Old Password" required/><br>
														  			<input id="pass" class="form-control" name="password" type="password" placeholder="New Password" required/><br>
														  			<input id="cpass" class="form-control" name="confirm_password" type="password" placeholder="Confirm password" required/><br>
								<button type="submit" id="sub" class="btn btn-success">SUBMIT</button>
							</div>	
								</form>
							</div>
<!-- =======
							<legend>Edit Admin Account</legend>	
							<form method="post" action="<?php echo base_url();?>cadmin/update_staff" role="form">
				  				<?php foreach($user as $us):?>
						  		<div class="personal-inf">
						  			<span><h4>#Personal Information</h4></span>
						  			<input class="form-control" value="<?php echo $us->id;?>" name="staffid" type="hidden" />
						  			<label for="firstname">First Name</label>
						  			<input id="firstname" class="form-control" value="<?php echo $us->firstname;?>" name="fname" type="text" placeholder="First Name" required/><br>
						  			<label for="lastname">Last Name</label>
						  			<input id="lastname" class="form-control" value="<?php echo $us->lastname;?>" name="lname" type="text" placeholder="Last Name" required/><br>
						  		</div>
						
						  		<div class="account-inf">
						  			<span><h4>#Account Information</h4></span>
						  			<label for="username">Username</label>
						  			<input id="username" class="form-control" value="<?php echo $us->username;?>" name="username" type="text" placeholder="Username" required/><br>
						  			<div id="changepass" >
							  			<label for="np">New Password</label>
							  			<input id="np" class="form-control" name="password" type="password" placeholder="Password" /><br>
							  			<label for="cp">Confirm Password</label>
							  			<input id="cp" class="form-control" name="confirm_password" type="password" placeholder="Confirm password"/><br>
									</div>	
						  		</div>	
						  		<button id="chpa" type="button" class="btn btn-info">Change Password</button>
						  		<button id="cchpa" type="button" class="btn btn-warning">Cancel</button><br><br>
						  		<label for="op" style="color:red">Type in current password to apply changes</label>
							  			<input id="op" class="form-control" name="old_password" type="password" placeholder="Password" required/><br>
								<button id="sub" type="submit" class="btn btn-lg btn-success">SUBMIT</button>
								<?php endforeach;?>
							</form>
>>>>>>> b13bb8fb114a8bf9db9576107462eeca7513c6dc -->
						</div>
						<div class="col-md-3"></div>
					</div>
	</div>
</section>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.datepicker').datepicker();	
		$('#changepass').hide();
		$('#cchpa').hide();
		$('#chpa').click(function(){
			$('#changepass').fadeIn(700);
			$('#chpa').hide();
			$('#cchpa').show();
		});
		$('#cchpa').click(function(){
			$('#changepass').hide();
			$('#np').val("");
			$('#cp').val("");
			$('#cchpa').hide();
			$('#chpa').show();
		});
		$('#sub').click(function(event){
			if($('#pass').val()!=$('#cpass').val()){
		        alert("Password/Confirm Password Doesn't Match");
		        event.preventDefault();
	        }

	      	else if (confirm('Confirm Changes?') == true) {
		    } else {
		         event.preventDefault();
		    }
		});
		// $('#sub').click(function(){
		// 	if($('#np').val() != ''){
		// 		if($('#np').val() != ('#cp').val())
		// 			alert('test');
		// 	}
		// });
	});	
</script>