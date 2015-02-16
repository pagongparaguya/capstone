<?php $this->load->view('header', array('num' => 7, 'title' => 'Schedule Timeslots')); ?>					
<div id="sched">
<div class="row" style="margin-top: 80px">
	<div class="col-md-12 columns">
	<div class="col-md-3 columns"></div>
	<div class="col-md-6 columns">	
<div class="element-container">
<!-- <div class="alert alert-success" role="alert">Successfully added to queue. Our Staff will contact you for confirmation as soon as you are on the top of the queue.</div> -->
<input type="hidden" id="val" value="<?php echo $val;?>"/>
<legend><b>Issue an Appointment</b></legend>
<span style="color:orange">NOTE : Scheduled appointment should be a day after today...</span><br>
<span id="message" style="color:red"></span><br>
<label for="date">Date</label>
<input id="date" class="form-control" name="date" type="date" placeholder="Date" required/><br>
		
			<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			        <thead>
			            <tr>
			                <th colspan="2" style="text-align: center; font-weight: bold; font-size: 150%">The Clinic Timeslots</th>
			            </tr>
			        </thead>
			 
			        <tbody id="tbody" style="text-align: center">						          
			            <tr>					                
			            	<td width="80%" class="time">7:30 - 8:30 AM</td>
			            	<td width="20%">
			            		<!-- <a class="href" href="<?php echo base_url();?>pages/add_appointment"> -->
			            		<button type="button" class="btn btn-info add">Add Appointment</button></a>
			            	</td>
			            </tr>
			            <tr>					                
			            	<td width="80%" class="time">8:30 - 9:30 AM</td>
			            	<td width="20%">
			            		<!-- <a href="<?php echo base_url();?>pages/add_appointment"> -->
			            		<button type="button" class="btn btn-info add">Add Appointment</button></a>
			            	</td>
			            </tr>
			            <tr>					                
			            	<td width="80%" class="time">9:30 - 10:30 AM</td>
			            	<td width="20%">
			            		<!-- <a href="<?php echo base_url();?>pages/add_appointment"> -->
			            		<button type="button" class="btn btn-info add">Add Appointment</button></a>
			            	</td>
			            </tr>
			            <tr>					                
			            	<td width="80%" class="time">10:30 - 11:30 AM</td>
			            	<td width="20%">
			            		<!-- <a href="<?php echo base_url();?>pages/add_appointment"> -->
			            		<button type="button" class="btn btn-info add">Add Appointment</button></a>
			            	</td>
			            </tr>
			            <tr>					                
			            	<td colspan="2">11:30 - 1:00  (LUNCH BREAK)</td>	  								            	
			            </tr>
			            <tr>					                
			            	<td width="80%" class="time">1:00 - 2:00 PM</td>
			            	<td width="20%">
			            		<!-- <a href="<?php echo base_url();?>pages/add_appointment"> -->
			            		<button type="button" class="btn btn-info add">Add Appointment</button></a>
			            	</td>
			            </tr>
			            <tr>					                
			            	<td width="80%" class="time">2:00 - 3:00 PM</td>
			            	<td width="20%">
			            		<!-- <a href="<?php echo base_url();?>pages/add_appointment"> -->
			            		<button type="button" class="btn btn-info add">Add Appointment</button></a>
			            	</td>
			            </tr>						          
			            <tr>					                
			            	<td width="80%" class="time">3:00 - 4:00 PM</td>
			            	<td width="20%">
			            		<!-- <a href="<?php echo base_url();?>pages/add_appointment"> -->
			            		<button type="button" class="btn btn-info add">Add Appointment</button></a>
			            	</td>
			            </tr>
			        </tbody>
			      </table>
			      </div>
	</div>
	<div class="col-md-3 columns"></div>
</div>
</div>
</div>

<div id="info">
	<form method="post" action="<?php echo base_url();?>appointment/add_appointment" role="form">
		<div class="row" style="margin-top: 80px">
			<div class="col-md-12 columns">			
				<div class="col-md-6 col-md-offset-3 columns">
						<div class="element-container">
							<legend id="title"></legend>
							<input type="hidden" name="date" id="idate"/>
							<input type="hidden" name="time" id="itime"/>
							
							<label for="fname">Firstname</label>
				  			<input id="fname" class="form-control" name="fname" type="text" required/><br>
				  			<label for="lname">Lastname</label>
				  			<input id="lname" class="form-control" name="lname" type="text" required/><br>
				  			<label for="mname">Middlename</label>
				  			<input id="mname" class="form-control" name="mname" type="text" required/><br>
				  			
				  			<div class="col-sm-12 col-md-12 col-lg-12 columns">				  				
						  		 	<div class="col-sm-5 col-md-5 col-lg-7 columns">	
							  			<label for="cno">Mobile Number ( FORMAT : 09123456789 )</label>
							  			<input id="cno" class="form-control" name="cnum" type="text" pattern="[0][9][0-9]{9}" required/><br>
				  					</div>
				  			</div>
							
				  			<div class="col-sm-12 col-md-12 col-lg-12 columns">				  				
						  		 	<div class="col-sm-5 col-md-5 col-lg-7 columns">	
							  			<label for="tno">Telephone Number ( FORMAT : 123-1234)</label>
							  			<input id="tno" class="form-control" name="tnum" type="text"pattern="[0-9]{3}[-][0-9]{4}" required/><br>
				  					</div>
				  			</div>
										  			
				  			<div class="col-sm-12 col-md-12 col-lg-12 columns">				  				
				  					<div class="col-sm-4 col-md-4 col-lg-4 columns">
				  						<label for="patient-type">Patient Type</label>
				  						<select id="patient-type" class="form-control" name="ptype" required>
				  						  <option value="" disabled default selected style="display:none;"></option>
								          <option value="Old Patient">Old Patient</option>
								          <option value="New Patient">New Patient</option>
								        </select>
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

<?php $this->load->view('footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		var todaysDate = new Date();
		$('#info').hide();
		$("#tbody").on('click','.add',function(){
			if($('#date').val()==''){
				$('#message').html("# Pick date first before you proceed !");
			}
			else{
				$('#info').fadeIn(900);
				var elem = $('#info');
				var date = $('#date').val();
				var time = $(this).parent().siblings(".time").text();
				if(elem) {
				    $(window).scrollTop(elem.offset().top).scrollLeft(elem.offset().left);
				}
				$('#idate').val(date);
				$('#itime').val(time);
				$('#title').html("Appointment for " +date+ " at " +time);
			}
		});
		$('#sub').click(function(event){
			if($("#chk").prop("checked")){
			}
			else{
					alert('Agree to Terms to proceed.');
					event.preventDefault();
			}
		});
		if($('#val').val()!=0){
			$('<div class="alert alert-success" role="alert">Successfully added to queue. Our Staff will contact you for confirmation if you are on top of the queue.</div>').insertAfter('#val');
		}
	});
</script>