<?php $this->load->view('header', array('num' => 7, 'title' => 'Schedule Timeslots')); ?>					
<div class="col-lg-10 col-lg-offset-1 columns">
						<div class="element-container">
							<div class="row" style="margin: 0">								
									<legend id="title">New Appointment for <?php echo date("F j, Y",strtotime($date));?></legend>
									<div class="col-lg-10 col-lg-offset-1 columns">		

										<div class="col-lg-5 columns">
											<div class="col-lg-12 columns">
												<label for="av-timeslots" style="margin-bottom: 5px">Choose among the available timeslots</label>	
											</div>
											<input id="dt" type="hidden" name="date" value="<?php echo $date;?>"/>
											<div class="col-lg-8 columns">	
												<select class="form-control" name="av-timeslots" id="av-timeslots">
												<option value="" disabled default selected style="display:none;"></option>
												<?php foreach($time as $time){?>
													<?php $ctr=0;
													for($i=0;$reserved[$i]!='';$i++){
														if($reserved[$i]->time == $time->time){
															$ctr=1;
														}
													}
													if($ctr==0){?>
													<option value="<?php echo $time->time;?>"><?php echo $time->time;?></option>
												<?php } }?>
												</select>
											</div>
										</div>
										
										<div class="col-lg-4 columns">	
											<div class="col-lg-7 columns">
												<label for="av-timeslots">Patient Type</label>	
												<select id="type" class="form-control" name="av-timeslots" id="av-timeslots">
												 	<option value="" disabled default selected style="display:none;"></option>
													<option value="new-patient">New Patient</option>
												    <option value="old-patient">Old Patient</option>
												</select>
											</div>
										</div>

										<div class="col-lg-3 columns">
											<label for="av-timeslots"># of people on queue</label><br>
											<span id="onqueue" style="font-weight:bold; margin:0 auto;"></span>
										</div>
											
										<!-- <div class="col-lg-1 columns" style="margin: 24px 0 15px -100px;">
											<button id="addappointment" class="btn btn-info">Add Appointmet</button>
										</div> -->
									</div>									
							</div>
						</div>
</div>

<!--- APPOINTMENT FORM FOR OLD PATIENT -->
<div id="old" class="col-lg-8 col-lg-offset-2 columns ">
	<form id="op" method="post" action="<?php echo base_url();?>appointment/add_pending_appointment" role="form">
						<div class="element-container">
							<div class="row" style="margin: 0">								
									<legend id="title"></legend>
									<div class="col-lg-10 col-lg-offset-1 columns">										
										<input id="odt" type="hidden" name="odate" value="<?php echo $date;?>" id="odate"/>
										<input type="hidden" name="otime" id="otime"/>
										<div class="col-lg-5 col-lg-offest-3 columns" style="margin-bottom: 10px;">
											<input type="hidden" value="Old Patient" name="optype">
											<label for="opatient-usrname">Username</label>
											<input id="opatient-usrname" class="form-control" placeholder="Please input your username" name="opatient-usrname" type="text"/>
										</div>
											
										<div class="col-lg-12 columns" style="margin-bottom: 10px;">
												<input id="chck" type="checkbox"> I agree that my appointment reservation is still on a pending status and the clinic staff will still contact me if I'm on top of the queue. I will receive an SMS notification if someone else has succesfully made an appointment reservation.
										</div>
										
										<div class="col-lg-12 columns">
											<button id="sub1" type="submit" class="btn btn-info">Submit</button>
										</div>
									</div>									
							</div>
						</div>
	</form>
</div>
<!-- END OF APPOINTMENT FORM FOR OLD PATIENT -->

<!--- APPOINTMENT FORM FOR NEW PATIENT -->
<div id="new">
	<form id="np" method="post" action="<?php echo base_url();?>appointment/add_pending_appointment" role="form">
		<div class="row">
			<div class="col-md-12 columns">			
				<div class="col-md-6 col-md-offset-3 columns">
						<div class="element-container">
							<input id="idt" type="hidden" name="idate" value="<?php echo $date;?>" id="idate"/>
							<input type="hidden" name="itime" id="itime"/>
							<input type="hidden" value="New Patient" name="nptype">
							<legend id="title"></legend>
							<label for="uname">Username</label>
				  			<input id="uname" class="form-control" placeholder="This serves as your identifier" name="uname" type="text" required/><br>
							<label for="fname">Firstname</label>
				  			<input id="fname" class="form-control" name="fname" type="text" required /><br>
				  			<label for="lname">Lastname</label>
				  			<input id="lname" class="form-control" name="lname" type="text" required /><br>
				  			<label for="mname">Middlename</label>
				  			<input id="mname" class="form-control" name="mname" type="text" required /><br>
				  			
				  			<div class="col-sm-12 col-md-12 col-lg-12 columns">				  				
						  		 	<div class="col-sm-5 col-md-5 col-lg-7 columns">	
							  			<label for="cno">Mobile Number ( FORMAT : 09123456789 )</label>
							  			<input id="cno" class="form-control" name="cnum" type="text" required pattern="[0][9][0-9]{9}" /><br>
				  					</div>
				  			</div>
							
				  			<div class="col-sm-12 col-md-12 col-lg-12 columns">				  				
						  		 	<div class="col-sm-5 col-md-5 col-lg-7 columns">	
							  			<label for="tno">Telephone Number ( FORMAT : 123-1234)</label>
							  			<input id="tno" class="form-control" name="tnum" type="text" pattern="[0-9]{3}[-][0-9]{4}" /><br>
				  					</div>
				  			</div>
										  			
					        <div class="col-sm-12 col-md-12 col-lg-12 columns">
							<br />
					        	<input id="chk" type="checkbox"> I agree that my appointment reservation is still on a pending status and the clinic staff will still contact me if I'm on top of the queue. I will receive an SMS notification if someone else has succesfully made an appointment reservation.<br><br>
					        </div>
											        
					        <button id="sub" type="submit" class="btn btn-info">Submit</button>
						</div>
				</div>
			</div>	
		</div>	
	</form>
</div>
<!--- END OF APPOINTMENT FORM FOR NEW PATIENT -->

<?php $this->load->view('footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		if($('#type').val()=='new-patient'){
			$('#old').hide();
			$('#new').show();
		}
		else if($('#type').val()=='old-patient'){
			$('#old').show();
			$('#new').hide();
		}
		else{
			$('#old').hide();
			$('#new').hide();
		}
		
		$(document).on('change', '#type', function(e) {
		    if(this.options[e.target.selectedIndex].text == "New Patient"){
		    	$('#old').hide();
				$('#new').show();
				$('#opatient-usrname').prop('required',false);
				$('#fname').prop('required',true);
				$('#lname').prop('required',true);
				$('#mname').prop('required',true);
				$('#cno').prop('required',true);
				$('#tno').prop('required',true);
				$('#opatient-usrname').val('');
				$('#chck').attr('checked', false);
		    }
		    else{
		    	$('#new').hide();
				$('#old').show();
				$('#opatient-usrname').prop('required',true);
				$('#fname').prop('required',false);
				$('#lname').prop('required',false);
				$('#mname').prop('required',false);
				$('#cno').prop('required',false);
				$('#tno').prop('required',false);
				$('#uname').val('');
				$('#fname').val('');
				$('#lname').val('');
				$('#mname').val('');
				$('#cno').val('');
				$('#tno').val('');
				$('#chk').attr('checked', false);
		    }
		});

		$(document).on('change', '#av-timeslots', function(e) {
			$('#itime').val(this.options[e.target.selectedIndex].text);
			$('#otime').val(this.options[e.target.selectedIndex].text);
			$.getJSON("<?php echo base_url();?>appointment/check_onqueue/",{time:this.options[e.target.selectedIndex].text, date:$('#dt').val()},success=function(data){
		        $("#onqueue").html(data);
		    });
		});

		$('#sub').click(function(event){
			if($('#np').valid()){
				if($('#av-timeslots').val()==null){
					event.preventDefault();
					swal('ERROR','Select a timeslot.','error');
				}else if($("#chk").prop("checked")){
					event.preventDefault();
					$.getJSON("<?php echo base_url();?>appointment/check_username/",{username:$('#uname').val()},success=function(data){
			        	if(data != '0'){
			        		swal('ERROR','Username already exists','ERROR');
			        	}else{
			        		$.getJSON("<?php echo base_url();?>appointment/check_pinfo/",{firstname:$('#fname').val(), lastname:$('#lname').val(), middlename:$('#mname').val()},success=function(data){
			        			if(data != '0'){
			        				swal('ERROR','You already have a profile','error');
			        			}else{
			        				if(confirm('Are you sure to reserve an appointment on ' + $('#idt').val() + ' at ' + $('#itime').val())){
					        			$('#np').submit();
									}
			        			}
			        		});
			        	}
		    		});
				}else{
						event.preventDefault();
						swal('ERROR','Agree to Terms','error');
				}
			}
		});	

		$('#sub1').click(function(event){
			if($('#op').valid()){
				if($('#av-timeslots').val()==null){
					event.preventDefault();
					swal('ERROR','Select a timeslot.','error');
				}else if($("#chck").prop("checked")){
					event.preventDefault();
					$.getJSON("<?php echo base_url();?>appointment/check_username/",{username:$('#opatient-usrname').val()},success=function(data){
			        	if(data == '0'){
			        		swal('ERROR','Username doesnt exists.','error');
			        	}else{
			        		if(confirm('Are you sure to reserve an appointment on ' + $('#odt').val() + ' at ' + $('#otime').val())){
			        			$('#op').submit();
			        		}
			        	}
			        });
				}else{
					event.preventDefault();
					swal('ERROR','Agree to terms to proceed.','error');
				}	
			}	
		});
	});
</script>