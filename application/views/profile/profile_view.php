<?php $this->load->view('header', array('num' => 2, 'title' => 'Patient Profile')); ?>
<?php foreach($profile as $prof):?>

	<legend class="pprofile-name"><?php echo $prof->firstname;?> <?php echo $prof->middlename;?> <?php echo $prof->lastname;?></legend>
			<div class="col-xs-12 columns">
				<a href="<?php echo base_url();?>records/view_history_of_appointments/<?php echo $prof->id;?>"><button type="button" class="btn btn-info">View History of Appointments</button></a>
				<a href="<?php echo base_url();?>records/view_appointment_record/<?php echo $prof->id;?>"><button type="button" class="btn btn-info">Add an Appointment Record</button></a>
			</div>

			</div>
				</div>

			<div class="col-xs-12 columns">
		          <div class="table-responsive">
		          	<table class="table table-bordered table-condensed text-center" style="background-color:#fff">
		          	     <thead>
		          	         <th class="text-center" colspan="16">THE TEETH PROFILE</th>
		          	     </thead>
		          	     <tbody>
		          	         <!-- <tr>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	         </tr> -->
		          	         <tr>
		          	             <td><img class="img-responsive" src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	         </tr>
		          	         <tr class="info" style="font-weight:bold">
		          	             <td>18</td>
		          	             <td>17</td>
		          	             <td>16</td>
		          	             <td>15</td>
		          	             <td>14</td>
		          	             <td>13</td>
		          	             <td>12</td>
		          	             <td>11</td>
		          	             <td>21</td>
		          	             <td>22</td>
		          	             <td>23</td>
		          	             <td>24</td>
		          	             <td>25</td>
		          	             <td>26</td>
		          	             <td>27</td>
		          	             <td>28</td>
		          	         </tr>
		          	         <tr>
		          	             <td></td>
		          	             <td></td>
		          	             <td></td>
		          	             <td></td>
		          	             <td></td>
		          	             <td></td>
		          	             <td></td>
		          	             <td></td>
		          	             <td></td>
		          	             <td></td>
		          	             <td></td>
		          	             <td></td>
		          	             <td></td>
		          	             <td></td>
		          	             <td></td>
		          	             <td></td>
		          	         </tr>
		          	         <tr class="info" style="font-weight:bold">
		          	             <td>48</td>
		          	             <td>47</td>
		          	             <td>46</td>
		          	             <td>45</td>
		          	             <td>44</td>
		          	             <td>43</td>
		          	             <td>42</td>
		          	             <td>41</td>
		          	             <td>31</td>
		          	             <td>32</td>
		          	             <td>33</td>
		          	             <td>34</td>
		          	             <td>35</td>
		          	             <td>36</td>
		          	             <td>37</td>
		          	             <td>38</td>
		          	         </tr>
		          	         <tr>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	             <td><img src="<?php echo base_url()?>/assets/img/clear.jpg" alt="" /></td>
		          	         </tr>
		          	         <!-- <tr>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	             <td>daot nga ngipon</td>
		          	         </tr> -->
		          	     </tbody>
		          	 </table>
		          </div>
					<div class="col-xs-4">
						<div class="panel panel-info">
							                      <div class="panel-heading">                           
							                           <span>Personal Information</span>
							                      </div>
							                      <div class="panel-body">
							                            <p><strong>Home address</strong>: <?php echo $prof->address;?></p>
							                            <p><strong>Telephone number</strong>: <?php echo $prof->telno;?></p>
							                            <p><strong>Mobile number</strong>: <?php echo $prof->mobileno;?></p>
							                            <p><strong>Marital status</strong>: <?php echo $prof->maritalstatus;?></p>
							                            <p><strong>Sex</strong>: <?php echo $prof->gender;?></p>
							                            <p><strong>Age</strong>: 10</p>
							                      </div>
						                  	</div>
					</div>							              	
	              	<div class="col-xs-4">
	              		<div class="panel panel-info">
		                      <div class="panel-heading">                           
		                           <span>Dental Information</span>
		                      </div>
		                      <div class="panel-body">
		                            <p><strong>OCCLUSION</strong>: <?php echo $prof->occlusion;?></p>
						  			<p><strong>Periodontal condition</strong>: <?php echo $prof->periodontalcondition;?></p>
						  			<p><strong>Oral hygiene</strong>: <?php echo $prof->oralhygiene;?></p>
						  			<p><strong>Previous history of bleeding</strong>: <?php echo $prof->prevhistoryofbleeding;?></p>
							  		<p><strong>Blood pressure</strong>: <?php echo $prof->bloodpressure;?></p>
		                      </div>
	              		</div>
	              	</div>					
	              	<div class="col-xs-4">
	              		<div class="panel panel-info">
		                      <div class="panel-heading">                           
		                           <span>Work Information</span>
		                      </div>
		                      <div class="panel-body">
		                            <p><strong>Office address</strong>: <?php echo $prof->officeaddress;?></p>
		                            <p><strong>Telephone number</strong>: <?php echo $prof->officetelno;?></p>
		                      </div>
	              		</div>
	              	</div>
</div>	
	<?php endforeach;?>

		<div class="col-xs-8 columns col-xs-offset-2 text-center">
			<div class="col-xs-4 columns">
						<div class="panel panel-info">
						  	<!-- Default panel contents -->
						  	<div class="panel-heading">Chronic ailments</div>

						 	<!-- Table -->					
							<table id="example" class="table" cellspacing="0" width="100%">							 
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
			<div class="col-xs-4 columns">	
						<div class="panel panel-info">
						  	<!-- Default panel contents -->
						  	<div class="panel-heading">Drugs taken</div>

							<table id="example" class="table" cellspacing="0" width="100%">
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
			<div class="col-xs-4 columns">
						<div class="panel panel-info">
						  	<!-- Default panel contents -->
						  	<div class="panel-heading">Allergies</div>

							<table id="example" class="table" cellspacing="0" width="100%">
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
		</div>
		<!--	<div class="col-xs-6 columns">
		 <span><h5>Denture</h5></span>
	
		<div class="col-xs-4 columns">
			<br><input id="checkbox1" name-"dupper" type="checkbox"><label for="checkbox1"> Upper</label><br>
			<br><input id="checkbox2" name="dlower" type="checkbox"><label for="checkbox2"> Lower</label>
		</div>
	
		<div class="col-xs-4 columns">
			<input class="form-control" name="usince" disabled type="text"  placeholder="Since" /><br>
					<input class="form-control" name="lsince" disabled type="text" placeholder="Since" /><br>
		</div> 
			</div> -->


<?php $this->load->view('footer'); ?>
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