<?php $this->load->view('header', array('num' => 1, 'title' => 'Schedule Timeslots')); ?>
<div class="col-md-12 col-lg-12 columns">
	  						<div class="col-md-4 col-lg-3 columns"></div>
	  						<div class="col-md-4 col-sm-12 col-lg-6 columns">					
	  								<div class="element-container nomargin-element-container">
	  									<table id="example" class="table table-bordered" cellspacing="0" width="100%">
	  									        <thead>
	  									            <tr>
	  									                <th colspan="2" style="text-align: center; font-weight: bold; font-size: 150%">(DISPLAY THE DATE OF THE DAY CLICKED FROM THE CALENDAR) Timeslots</th>
	  									            </tr>
	  									            <tr>
	  									            	<th colspan="2">This is a weekday schedule(mao ni makita if weekday nga date gi click)</th>
	  									            </tr>
	  									        </thead>
	  									 
	  									        <tbody style="text-align: center">						          
	  									            <tr>					                
	  									            	<td width="65%">7:30 - 8:30 AM</td>
	  									            	<td width="35%">
	  									            		Available / Unavailable
	  									            	</td>
	  									            </tr>
	  									            <tr>					                
	  									            	<td width="65%">8:30 - 9:30 AM</td>
	  									            	<td width="35%">
	  									            		Available / Unavailable
	  									            	</td>
	  									            </tr>
	  									            <tr>					                
	  									            	<td width="65%">9:30 - 10:30 AM</td>
	  									            	<td width="35%">
	  									            		Available / Unavailable
	  									            	</td>
	  									            </tr>
	  									            <tr>					                
	  									            	<td>10:30 - 11:30 AM</td>
	  									            	<td width="35%">
	  									            		Available / Unavailable
	  									            	</td>
	  									            </tr>
	  									            <tr>					                
	  									            	<td colspan="2">11:30 - 1:00 PM (Lunch Break)</td>	  								            	
	  									            </tr>
	  									            <tr>					                
	  									            	<td width="65%">1:00 - 2:00 PM</td>
	  									            	<td width="35%">
	  									            		Available / Unavailable
	  									            	</td>
	  									            </tr>
	  									            <tr>					                
	  									            	<td width="65%">2:00 - 3:00 PM</td>
	  									            	<td width="35%">
	  									            		Available / Unavailable
	  									            	</td>
	  									            </tr>						          
	  									            <tr>					                
	  									            	<td width="65%">3:00 - 4:00 PM</td>
	  									            	<td width="35%">
	  									            		Available / Unavailable
	  									            	</td>
	  									            </tr>
	  									        </tbody>
	  									      </table>
	  								</div>

			  				        <form method="post" action="<?php echo base_url();?>cadmin/add_patient" role="form">
										<div class="element-container">
											<legend>Appointment Reservation</legend>					  			

									        <label for="app-tslot">Time Slot</label>					  			
								  			<select id="app-tslot" class="form-control" name="app-tslot">
									          <option value="1">7:30am - 8:30am</option>
									          <option value="2">8:30am - 9:30am</option>
									          <option value="3">8:30am - 9:30am</option>
									          <option value="4">9:30am - 10:30am</option>
									          <option value="5">10:30am - 11:30am</option>
									          <option value="6">1:00pm - 2:00pm</option>
									          <option value="7">2:00pm - 3:00pm</option>
									          <option value="8">3:00pm - 4:00pm</option>
									        </select><br />

								  			<label for="app-fname">First Name</label>
								  			<input class="form-control" id="app-fname" name="app-fname" type="text" /><br>
								  			
								  			<label for="app-lname">Last Name</label>
								  			<input class="form-control" id="app-lname" name="app-lname" type="text" /><br>
								  			
								  			<label for="app-lname">Middle Name</label>
								  			<input class="form-control" id="app-mname" name="app-mname" type="text" /><br>
								  			
								  			<label for="app-lname">Contact Number</label>
								  			<input class="form-control" id="app-cnum" name="app-cnum" type="text" /><br>
								  			
								  			<label for="app-ptype">Patient Type</label>					  			
								  			<select id="app-ptype" class="form-control" name="app-ptype">
									          <option value="old">Old Patient</option>
									          <option value="new">New Patient</option>
									        </select><br>
									        <button type="submit" class="btn btn-success">SUBMIT</button>						        
										</div>
							        </form>  

							        <div class="element-container nomargin-element-container">
	  									<table id="example" class="table table-bordered" cellspacing="0" width="100%">
	  									        <thead>
	  									            <tr>
	  									                <th colspan="2" style="text-align: center; font-weight: bold; font-size: 150%">(DISPLAY THE DATE OF THE DAY CLICKED FROM THE CALENDAR) Timeslots</th>
	  									            </tr>
	  									            <tr>
	  									            	<th colspan="2">This is a Saturday Schedule(mao ni makita if saturday nga date gi click)</th>
	  									            </tr>
	  									        </thead>
	  									 
	  									        <tbody style="text-align: center">						          
	  									            <tr>					                
	  									            	<td width="65%">9:00 - 10:00 AM</td>
	  									            	<td width="35%">
	  									            		Available / Unavailable
	  									            	</td>
	  									            </tr>
	  									            <tr>					                
	  									            	<td width="65%">10:00 - 11:00 AM</td>
	  									            	<td width="35%">
	  									            		Available / Unavailable
	  									            	</td>
	  									            </tr>
	  									            <tr>					                
	  									            	<td width="65%">11:00 - 12:00 AM</td>
	  									            	<td width="35%">
	  									            		Available / Unavailable
	  									            	</td>
	  									            </tr>
	  									            <tr>					                
	  									            	<td colspan="2">12:00 - 1:00 PM (Lunch Break)</td>	  								            	
	  									            </tr>
	  									            <tr>					                
	  									            	<td width="65%">1:00 - 2:00 PM</td>
	  									            	<td width="35%">
	  									            		Available / Unavailable
	  									            	</td>
	  									            </tr>
	  									            <tr>					                
	  									            	<td width="65%">2:00 - 3:00 PM</td>
	  									            	<td width="35%">
	  									            		Available / Unavailable
	  									            	</td>
	  									            </tr>						          
	  									            <tr>					                
	  									            	<td width="65%">3:00 - 4:00 PM</td>
	  									            	<td width="35%">
	  									            		Available / Unavailable
	  									            	</td>
	  									            </tr>
	  									            <tr>					                
	  									            	<td width="65%">4:00 - 5:00 PM</td>
	  									            	<td width="35%">
	  									            		Available / Unavailable
	  									            	</td>
	  									            </tr>
	  									        </tbody>
	  									      </table>
	  								</div>								
	  						</div>
	  						<div class="col-md-4 col-lg-3 columns"></div>
</div>	  	
<?php $this->load->view('footer'); ?>