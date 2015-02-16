<?php $this->load->view('header', array('num' => 5, 'title' => 'Create Admin')); ?>
	<div class="row">		
					<div class="col-md-12 columns">						
						<div class="col-md-3 columns"></div>
						<div class="col-md-6 columns">

							<div class="element-container">
								<legend>Create Admin Account</legend><br>
								<form method="post" action="<?php echo base_url();?>cadmin/add_staff" role="form">
												  		
														  		<div class="personal-inf">
														  			<span><h5>Personal Information</h5></span>
														  			<label for="admin-fname">First Name</label>
														  			<input id="admin-fname" class="form-control" name="fname" type="text" required/><br>
														  			
										<label for="admin-lname">Last Name</label>
														  			<input id="admin-lname" class="form-control" name="lname" type="text" required/><br>
														  		</div>
														
														  		<div class="account-inf">
														  			<span><h5>Account Information</h5></span>
								
														  			<label for="username">Username</label>
														  			<input id="username" class="form-control" name="username" type="text" required/><br>
														  			
										<span style="color:orange"># The Default password is <b><i>wecandothis</i></b> you can change your password once you logged in to your account.</span>
														  		</div><br>
									<button id="sub" type="submit" class="btn btn-success">SUBMIT</button>
								</form>
							</div>
<!-- 
							<legend>Create Admin Account</legend>
							<center><span style="color:red;" id="message"></span></center><br>
							<form method="post" action="<?php echo base_url();?>cadmin/add_staff" role="form">
				  		
						  		<div class="personal-inf">
						  			<span><h4>#Personal Information</h4></span>
						  			<label for="admin-fname">First Name</label>
						  			<input id="admin-fname" class="form-control" name="fname" type="text" required/><br>
						  			
									<label for="admin-lname">Last Name</label>
						  			<input id="admin-lname" class="form-control" name="lname" type="text" required/><br>
						  		</div>
						
						  		<div class="account-inf">
						  			<span><h4>#Account Information</h4></span>

						  			<label for="username">Username</label>
						  			<input id="username" class="form-control" name="username" type="text" required/><br>
						  			
									<label for="pass">Password</label>
						  			<input id="pass" class="form-control" name="password" type="password" required/><br>
						  			
									<label for="cpass">Confirm Password</label>
						  			<input id="cpass" class="form-control" name="confirm_password" type="password" required/><br>
						  		</div>
								<button id="sub" type="submit" class="btn btn-lg btn-success">SUBMIT</button>
							</form>
 -->
						</div>
						<div class="col-md-3"></div>
					</div>
	</div>
</section>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.datepicker').datepicker();	
		$('#sub').click(function(event){
			if($('#pass').val()!=$('#cpass').val()){
				alert('Password / Confirm Password dont match');
				event.preventDefault();
			}

			// $.getJSON("<?php echo base_url();?>cadmin/check_username/",{username:$("#username").val()},success=function(data){
	  //       if(data=="1"){
	  //         $("#notif").html("");
	  //         $('#editProfileModal').foundation('reveal', 'open');
	  //       }else{
	  //         $("#notif").html("Wrong Answer!");
	  //       }
	  //     });

		});

		// $('#sub').click(function(){
		// 	if($('#pass').val()!=$('#cpass').val()){
	 //            alert("Password/Confirm Password Doesn't Match");
	 //            event.preventDefault();
		// 	}
		// });
	});	
</script>