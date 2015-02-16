<?php $this->load->view('header', array('num' => 2, 'title' => 'Patient Profile')); ?>
<section id="main-slider" style="margin:100px 200px;">
<?php foreach($profile as $prof):?>
	<legend><?php echo $prof->firstname;?> <?php echo $prof->middlename;?> <?php echo $prof->lastname;?></legend>

		<div class="row clearfix">
  		<div class="col-md-12 columns">
  			<div class="personal-info">
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
  			</div>
			
  		</div>
		
  		<div class="col-md-12 columns">
  			<div class="work-info">
  				<span><h5>Work Information</h5></span>
  					<ul class="wi-1st-set">
  						<li>Office Address: <?php echo $prof->officeaddress;?></li>
  						<li>Telephone Number: <?php echo $prof->officetelno;?></li>
  					</ul>
  			</div>
  		</div>

		<div class="col-md-12 columns">
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
<?php endforeach;?>
			<div class="col-md-12 columns">
				<div class="col-md-3 columns"></div>
				<div class="col-md-6 columns">					
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
				<div class="col-md-3 columns"></div>
			</div>
				
			<div class="col-md-12 columns">
				<div class="col-md-3 columns"></div>
				<div class="col-md-6 columns">					
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
				<div class="col-md-3 columns"></div>
			</div>
			<div class="col-md-12 columns">
				<div class="col-md-3 columns"></div>
				<div class="col-md-6 columns">
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
				<div class="col-md-3 columns"></div>
			</div>
			
			<div class="col-md-12 columns">
				<button type="button" class="btn btn-info">View History of Appointments</button>
				<button type="button" class="btn btn-info">Add an Appoointment Record</button>
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
</section>
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