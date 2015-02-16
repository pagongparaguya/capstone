<?php $this->load->view('header', array('num' => 2, 'title' => 'Patient Profile')); ?>
<?php foreach($profile as $prof):?>

	<legend class="pprofile-name"><?php echo $prof->firstname;?> <?php echo $prof->middlename;?> <?php echo $prof->lastname;?></legend>
			<div class="col-md-12 columns">
				<a href="<?php echo base_url();?>records/view_history_of_appointments"><button type="button" class="btn btn-info">View History of Appointments</button></a>
				<a href="<?php echo base_url();?>records/view_appointment_record"><button type="button" class="btn btn-info">Add an Appointment Record</button></a>
			</div>
			<div class="col-md-12 columns">
				<div class="element-container">
					<div class="panel panel-default frame about-us-frame">
	                      <div class="panel-heading">                           
	                           <span>Personal Information</span>
	                      </div>
	                      <div class="panel-body">
	                            <p>Home Address: <?php echo $prof->address;?></p>
	                            <p>Telephone Number: <?php echo $prof->telno;?></p>
	                            <p>Mobile Number: <?php echo $prof->mobileno;?></p>
	                            <p>Marital Status: <?php echo $prof->maritalstatus;?></p>
	                            <p>Sex: <?php echo $prof->gender;?></p>
	                            <p>Age: 10</p>
	                      </div>
                  	</div>
                  	<div class="panel panel-default frame about-us-frame">
	                      <div class="panel-heading">                           
	                           <span>Work Information</span>
	                      </div>
	                      <div class="panel-body">
	                            <p>Office Address: <?php echo $prof->officeaddress;?></p>
	                            <p>Telephone Number: <?php echo $prof->officetelno;?></p>
	                      </div>
                  	</div>
                  	<div class="panel panel-default frame about-us-frame">
	                      <div class="panel-heading">                           
	                           <span>Dental Information</span>
	                      </div>
	                      <div class="panel-body">
	                            <p>OCCLUSION: <?php echo $prof->occlusion;?></p>
					  			<p>Periodontal Condition: <?php echo $prof->periodontalcondition;?></p>
					  			<p>Oral Hygiene: <?php echo $prof->oralhygiene;?></p>
					  			<p>Previous History of Bleeding: <?php echo $prof->prevhistoryofbleeding;?></p>
						  		<p>Blood Pressure: <?php echo $prof->bloodpressure;?></p>
	                      </div>
                  	</div>
					<!-- <div class="personal-info">
						<span><h5>Personal Information</h5></span>
							<ul class="pi-1st-set">
								<li>Home Address: <?php echo $prof->address;?></li>
								<li>Telephone Number: <?php echo $prof->telno;?></li>
								<li>Mobile Number: <?php echo $prof->contactno;?></li>
							</ul>
						
							<ul class="pi-2nd-set">
								<li>Marital Status: <?php echo $prof->maritalstatus;?></li>
								<li>Sex: <?php echo $prof->gender;?></li>
								<li>Age: 10</li>
							</ul>
					</div> -->
				
				</div>		
			</div>
	
		<!-- 	<div class="col-md-12 columns">
				<div class="element-container">
					<div class="work-info">
						<span><h5>Work Information</h5></span>
							<ul class="wi-1st-set">
								<li>Office Address: <?php echo $prof->officeaddress;?></li>
								<li>Telephone Number: <?php echo $prof->officetelno;?></li>
							</ul>
					</div>
				</div>
			</div> -->
	
	<!-- <div class="col-md-12 columns">
			<div class="element-container">
					<span><h5>Dental Information</h5></span>
					<div class="dental-info">					
						  	<div class="col-md-6">
						  		<ul class="di-1st-set">
						  			<li>OCCLUSION: <?php echo $prof->occlusion;?></li>
						  			<li>Periodontal Condition: <?php echo $prof->periodontalcondition;?></li>
						  			<li>Oral Hygiene: <?php echo $prof->oralhygiene;?></li>
						  		</ul>
						  	</div>					
						
						  	<div class="col-md-6">
						  		<ul class="di-2nd-set">
						  			<span><h5>Denture</h5></span>
						  			<li>Upper Since: 2005</li>
						  			<li>Lower Since: 2019</li>
						  		</ul>
						  	</div>
						
						  	<div class="last-set">
						  		<ul>
						  			<li>Previous History of Bleeding: <?php echo $prof->prevhistoryofbleeding;?></li>
						  			<li>Blood Pressure: <?php echo $prof->bloodpressure;?></li>
						  		</ul>
						  	</div>
					</div>
			</div>
		</div>		 -->
	<?php endforeach;?>

		<div class="col-md-12 columns">
			<div class="col-md-3 columns"></div>
			<div class="col-md-6 columns">					
					<div class="element-container">
						<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						        <thead>
						            <tr>
						                <th>Chronic Ailments</th>
						            </tr>
						        </thead>
						 
						        <tbody>
						          <?php foreach($chronicailment as $ca):?>
						            <tr>					                
						            	<td><?php echo $ca->chronicailmentname;?></td>
						            </tr>
						          <?php endforeach;?>
						        </tbody>
						      </table>
					</div>
			</div>
			<div class="col-md-3 columns"></div>
		</div>
			
		<div class="col-md-12 columns">
			<div class="col-md-3 columns"></div>
			<div class="col-md-6 columns">					
					<div class="element-container">
						<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						        <thead>
						            <tr>
						                <th>Drugs Taken</th>
						            </tr>
						        </thead>
						 
						        <tbody>
						          <?php foreach($drugstaken as $dt):?>
						            <tr>					                
						            	<td><?php echo $dt->drugname;?></td>
						            </tr>
						          <?php endforeach;?>
						        </tbody>
						      </table>
					</div>
			</div>
			<div class="col-md-3 columns"></div>
		</div>
		<div class="col-md-12 columns">
			<div class="col-md-3 columns"></div>
			<div class="col-md-6 columns">
					<div class="element-container">
						<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
						        <thead>
						            <tr>
						                <th>Allergies</th>
						            </tr>
						        </thead>
						 
						        <tbody>
						          <?php foreach($allergies as $al):?>
						            <tr>					                
						            	<td><?php echo $al->allergyname;?></td>
						            </tr>
						          <?php endforeach;?>
						        </tbody>
						      </table>
					</div>
			</div>
			<div class="col-md-3 columns"></div>
		</div>
			<div class="col-md-6 columns">
		<!-- <span><h5>Denture</h5></span>
	
		<div class="col-md-4 columns">
			<br><input id="checkbox1" name-"dupper" type="checkbox"><label for="checkbox1"> Upper</label><br>
			<br><input id="checkbox2" name="dlower" type="checkbox"><label for="checkbox2"> Lower</label>
		</div>
	
		<div class="col-md-4 columns">
			<input class="form-control" name="usince" disabled type="text"  placeholder="Since" /><br>
					<input class="form-control" name="lsince" disabled type="text" placeholder="Since" /><br>
		</div> -->
			</div>


<?php $this->load->view('footer'); ?>

<!--script>
    $(document).ready(function() {
        $('#example').dataTable();
    	$('#example1').dataTable();
    	$('#example2').dataTable();
    } );
</script-->

<script type="text/javascript">
    var cctr=1;
    var actr=1;

    $(document).ready(function(){
                $("#add_drugs").click(function(){
                	ctemp = cctr;
                	cctr+=1;
                    $('<br id="bdt' + cctr + '"><textarea id="dt' + cctr + '" class="form-control" name="adt[]" placeholder="Drugs Taken ('+ ctemp +')"></textarea>').insertAfter("#dt"+ ctemp);
                });

                $("#rmv_drugs").click(function() {
                    if (cctr != 1) { 
                      $('#bdt' + cctr).remove();
                      $('#dt' + cctr).remove();
                      cctr -= 1; 
                    }
                });

                $("#add_allergy").click(function(){
                	atemp = actr;
                	actr+=1; 
                    $('<br id="bal' + actr + '"><textarea id="al' + actr + '" class="form-control" name="aal[]" placeholder="Allergies ('+ atemp +')"></textarea>').insertAfter("#al"+ atemp);                
                });

                $("#rmv_allergy").click(function() {
                    if (actr != 1) { 
                      $('#bal' + actr).remove();
                      $('#al' + actr).remove();
                      actr -= 1; 
                    }
                });


    });
</script>