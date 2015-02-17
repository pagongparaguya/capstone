<?php $this->load->view('header', array('num' => 1, 'title' => 'Clinic Calendar')); ?>
<div class="col-lg-12 columns">
	<div class="element-container">
		<?php echo $calendar; ?>	
	</div>
	<button class="btn btn-info btn-cancelapp">Cancel an appointment</button>
</div>

<?php if($this->session->userdata('username')){?>
<div class="col-lg-4 col-lg-offset-4 columns">
	<button type="button" class="btn-closesched btn btn-info" data-target="#modal-closesched">Close a Schedule</button>
	<button type="button" class="btn-opensched btn btn-info" data-target="#modal-opensched">Open a Schedule</button>
</div>
<?php }?>
	
</div>
		<div class="row">
	  		<div class="col-md-12 columns">
	  						<div class="col-md-6 col-md-offset-3 columns">	

										  <!-- MODAL FOR CANCELLING AN APPOINTMENT -->									
	  								      <div class="modal fade" id="modal-cancelappointment" tabindex="-1" role="dialog" aria-labelledby="Cance an appointment" aria-hidden="true">
											  <div class="modal-dialog">
											    <div class="modal-content">

											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											        <h4 class="modal-title">Cancel an appointment</h4>
											      </div>

											      <div class="modal-body" style="width:50%; margin: 0 auto">
											        	<label>
											        		Username	
											        		<input style="width:138%; font-weight:normal" type="text" placeholder="Input your assigned username" class="form-control" required/>
											        	</label>
												        <br />
												        <label for="opsched-date">Date</label>
														<input id="opsched-date" class="form-control" name="date" type="date" placeholder="Date" required/>												      	
											      </div>

											      <div class="modal-footer">
											        <button type="button" class="btn btn-primary">Submit</button>
											      </div>
											    </div><!-- /.modal-content -->
											  </div><!-- /.modal-dialog -->
										  </div><!-- /.modal -->
										  <!-- END OF MODAL FOR CANCELLING A CLOSED APPOINTMENT -->									

	  								      <!-- MODAL FOR OPENING A SCHEDULE -->									
	  								      <div class="modal fade" id="modal-opensched" tabindex="-1" role="dialog" aria-labelledby="Open a schedule" aria-hidden="true">
											  <div class="modal-dialog">
											    <div class="modal-content">

											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											        <h4 class="modal-title">Open a Schedule</h4>
											      </div>

											      <div class="modal-body">
												        <label for="opsched-date">Date</label>
														<input id="opsched-date" class="form-control" name="date" type="date" placeholder="Date" required/>
												      	<br>

												        <ul class="modal-btn-grp">
												        	<li>
														        	<button class="add-tslot-open btn btn-success" type="button">Add Timeslots to Open</button>
												        	</li>
												        	<li>
														        	<button class="rm-tslot-open btn btn-danger" type="button">Remove a Timeslot</button>
												        	</li>
												        </ul>

												        <label for="modal-tslot-select">Time</label>
								  						<select id="modal-tslot-select" class="form-control" name="ptype" required>
												          <option value="wholeday">7:30 - 8:30</option>
												          <option value="wholeday">8:30 - 9:30</option>
												          <option value="wholeday">10:30 - 11:30</option>
												          <option value="wholeday">1:00 - 2:00</option>
												          <option value="wholeday">2:00 - 3:00</option>
												          <option value="wholeday">3:00 - 4:00</option>
												        </select>									        
											      </div>

											      <div class="modal-footer">
											        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											        <button type="button" class="btn btn-primary">Submit</button>
											      </div>
											    </div><!-- /.modal-content -->
											  </div><!-- /.modal-dialog -->
										  </div><!-- /.modal -->
										  <!-- END OF OPENING A SCHEDULE MODAL -->	  								      

	  								      <!-- MODAL FOR CLOSING A SCHEDULE -->
	  								      <div class="modal fade" id="modal-closesched" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											  <div class="modal-dialog">
											    <div class="modal-content">

											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											        <h4 class="modal-title">Close a Schedule</h4>
											      </div>

											      <div class="modal-body">
												        <label for="clsched-date">Date</label>
														<input id="clsched-date" class="form-control" name="date" type="date" placeholder="Date" required/>
												      	<br>

												        <ul class="modal-btn-grp">
												        	<li>
														        	<button class="add-tslot-close btn btn-success" type="button">Add Timeslots to Close</button>
												        	</li>
												        	<li>
														        	<button class="rm-tslot-close btn btn-danger" type="button">Remove a Timeslot</button>
												        	</li>
												        </ul>

												        <label for="modal-tslot-select">Time</label>
								  						<select id="modal-tslot-select" class="form-control" name="ptype" required>
												          <option value="wholeday">7:30 - 8:30</option>
												          <option value="wholeday">8:30 - 9:30</option>
												          <option value="wholeday">10:30 - 11:30</option>
												          <option value="wholeday">1:00 - 2:00</option>
												          <option value="wholeday">2:00 - 3:00</option>
												          <option value="wholeday">3:00 - 4:00</option>
												        </select>									        
											      </div>

											      <div class="modal-footer">
											        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											        <button type="button" class="btn btn-primary">Submit</button>
											      </div>
											    </div><!-- /.modal-content -->
											  </div><!-- /.modal-dialog -->
										  </div><!-- /.modal -->
	  								      <!-- END OF CLOSTING A SCHEDULE MODAL -->
				</div>
		</div>
</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
  $(document).ready(function(){
  	document.getElementsByClassName('btn-opensched')[0].onclick = function(){
  		$('#modal-opensched').modal('toggle');
  	};

  	document.getElementsByClassName('btn-closesched')[0].onclick = function(){
  		$('#modal-closesched').modal('toggle');
  	};

  	document.getElementsByClassName('btn-cancelapp')[0].onclick = function(){
  		$('#modal-cancelappointment').modal('toggle');
  	};     
  });
</script>
