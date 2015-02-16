<?php $this->load->view('header', array('num' => 2, 'title' => 'Edit Patient')); ?>
<div class="element-container"> 
	<legend>Edit Profile</legend>
		<center><span style="color:red;"><?php echo $message;?></span></center><br><br>
		<form method="post" action="<?php echo base_url();?>cadmin/update_patient" role="form">
		<div class="row center-block">
  		<div class="col-md-6 columns">
  		<?php foreach($profile as $prof):?>
  			<span><h3>Personal Information</h3></span>
  			<input type="hidden" name="profid" value="<?php echo $prof->id; ?>"/>
  			
        <label for="editp-fname">First Name</label>
        <input id="editp-fname" class="form-control" value="<?php echo $prof->firstname;?>" name="fname" type="text" required /><br>
  			
        <label for="editp-lname">Last Name</label>
        <input id="editp-lname" class="form-control" value="<?php echo $prof->lastname;?>" name="lname" type="text" required /><br>
  			
        <label for="editp-mname">Middle Name</label>
        <input id="editp-mname" class="form-control" value="<?php echo $prof->middlename;?>" name="mname" type="text" required /><br>
  			
        <label for="editp-hadd">Home Address</label>
        <input id="editp-hadd" class="form-control" value="<?php echo $prof->address;?>" name="hadd" type="text" required /><br>
  			
        <label for="editp-telno">Telephone Number</label>
        <input id="editp-telno" class="form-control" value="<?php echo $prof->telno;?>" name="htno" type="text" /><br>
  			
        <label for="editp-mno">Mobile Number</label>
        <input id="editp-mno" class="form-control" value="<?php echo $prof->mobileno;?>" name="mno" type="text" pattern="[0][9][0-9]{9}" required/><br>
			<div class="col-md-6 columns">

        <label for="editp-gender">Gender</label>  
				<select id="editp-gender" class="form-control" name="gender" required>
		          <option value="<?php echo $prof->sex;?>" style="display:none;"><?php echo $prof->sex;?></option>
		          <option value="Male">Male</option>
		          <option value="Female">Female</option>
		    </select><br>
			</div>

			<div class="col-md-6 columns">
        <label for="editp-mstatus">Marital Status</label>  
				<select id="editp-mstatus" class="form-control" name="mstat" required>
		          <option value="<?php echo $prof->maritalstatus;?>" style="display:none;"><?php echo $prof->maritalstatus;?></option>
		          <option value="Single">Single</option>
		          <option value="Married">Married</option>
		        </select>
			</div>
			
  		</div>
		
  		<div class="col-md-6 columns">
  			<span><h3>Work Information</h3></span>
        
        <label for="editp-oadd">Office Address</label>  
  			<input id="editp-oadd" class="form-control" value="<?php echo $prof->officeaddress;?>" name="oadd" type="text" /><br>
  			
        <label for="editp-otelno">Telephone Number</label>  
        <input id="editp-otelno" class="form-control" value="<?php echo $prof->officetelno;?>" name="otno" type="text"  /><br>
  		</div>
	</div>
	<br><br>

	<div class="row center-block">
		
		<div class="col-md-6 columns">
			<span><h3>Dental Information</h3></span>
      
        <label for="editp-oc">OCCLUSION</label>    
  			<select id="editp-occ"class="form-control" name="occ" required>
  		        <option value="<?php echo $prof->occlusion;?>" style="display:none;"><?php echo $prof->occlusion;?></option>
  		        <option value="Class I">Class I</option>
  		        <option value="Class II (Div.1)">Class II (Div.1)</option>
  		        <option value="Class II (Div.2)">Class II (Div.2)</option>
  		        <option value="Class III">Class III</option>
  		        <option value="None">None</option>
  		     </select><br>
  			
        <label for="editp-pdc">Periodontal Condition</label>  
        <select id="editp-pdc" class="form-control" name="perdon" required>
  		        <option value="<?php echo $prof->periodontalcondition;?>" style="display:none;"><?php echo $prof->periodontalcondition;?></option>
  		        <option value="Normal">Normal</option>
  		        <option value="With Periodontal Problem">With Periodontal Problem</option>
  		  </select><br>
        
        <label for="editp-oh">Oral Hygiene</label>  
    		<select id="editp-oh" class="form-control" name="orhy" required>
  		        <option value="<?php echo $prof->oralhygiene;?>" style="display:none;"><?php echo $prof->oralhygiene;?></option>
  		        <option value="Good">Good</option>
  		        <option value="Poor">Poor</option>
  		   </select><br>
    		</div>

    		<div class="col-md-6 columns">
  			<!-- <span><h3>Denture</h3></span>

  			<div class="col-md-4 columns">
  				<br><input id="checkbox1" name-"dupper" type="checkbox"><label for="checkbox1"> Upper</label><br>
  				<br><input id="checkbox2" name="dlower" type="checkbox"><label for="checkbox2"> Lower</label>
  			</div>

  			<div class="col-md-4 columns">
  				<input class="form-control" name="usince" disabled type="text"  placeholder="Since" /><br>
    				<input class="form-control" name="lsince" disabled type="text" placeholder="Since" /><br>
  			</div> -->
  		</div>
	
	</div>
	<br><br>
	<div class="row center-block">
		<div id="dtcon" class="col-md-6 columns">
        
        <label for="ca1">Previous History of Bleeding</label>  
  			<select id="ca1" class="form-control" name="phb" required>
		        <option value="<?php echo $prof->prevhistoryofbleeding;?>" style="display:none;"><?php echo $prof->prevhistoryofbleeding;?></option>
		        <option value="Yes">Yes</option>
		        <option value="No">No</option>
		    </select><br>

        <label for="al1">Blood Pressure</label>
        <input id="al1" class="form-control" value="<?php echo $prof->bloodpressure;?>" name="bp" type="text" /><br>
    </div>
  </div>
</div>  

  			<!-- <input id="dt1" class="form-control" value="<?php echo $prof->chronicailments;?>" name="chrail" type="text" placeholder="Chronic Ailments" /><br> -->
<div class="col-sm-12 col-md-12 col-lg-12 columns">
      
      <div class="col-sm-4 col-md-4 col-lg-4 columns">
          <div class="element-container">
              <label>Chronic Ailments</label>
              <?php $rctr=0;foreach($chronicailment as $ca):$rctr+=1;?>
                <input type="hidden" name="caid<?php echo $rctr;?>" value="<?php echo $ca->id; ?>"/>
                <input id="ca<?php echo $rctr;?>" class="form-control" value="<?php echo $ca->chronicailmentname;?>" name="ca<?php echo $rctr;?>" /><br>
              <?php endforeach;?>
              <button id="add_chrail" type="button" class="btn btn-info">Add Chronic Ailments</button>       
              <button id="rmv_chrail" type="button" class="btn btn-danger">Remove</button><br><br>
          </div>
      </div>
        
      <div class="col-sm-4 col-md-4 col-lg-4 columns">
          <div class="element-container">
              <label>Drugs Taken</label>
              <?php $cctr=0;foreach($drugstaken as $dt):$cctr+=1;?>
                <input type="hidden" name="drugid<?php echo $cctr;?>" value="<?php echo $dt->id; ?>"/>
                <textarea id="dt<?php echo $cctr;?>" class="form-control" name="dt<?php echo $cctr;?>" ><?php echo $dt->drugname;?></textarea><br>
              <?php endforeach;?>
              <button id="add_drugs" type="button" class="btn btn-info">Add Drugs Taken</button>       
              <button id="rmv_drugs" type="button" class="btn btn-danger">Remove</button>
          </div>
      </div>
          
    
      <div id="alcon" class="col-sm-4 col-md-4 col-lg-4 columns">
            <div class="element-container">
                <label>Allergies</label>
                <?php $actr=0;foreach($allergies as $al):$actr+=1;?>
                  <input type="hidden" name="allergyid<?php echo $actr;?>" value="<?php echo $al->id; ?>"/>
                  <textarea id="al<?php echo $actr;?>" class="form-control" name="al<?php echo $actr;?>"><?php echo $al->allergyname;?></textarea><br>
                <?php endforeach;?>
                <button id="add_allergy" type="button" class="btn btn-info">Add Allergy </button>       
                <button id="rmv_allergy" type="button" class="btn btn-danger">Remove</button>
            </div>
      </div>
</div>

	<?php endforeach;?>
	<br><br>



<div class="row center-block">
  <input type="hidden" name="cctr" value="<?php echo $cctr; ?>"/>
    <input type="hidden" name="actr" value="<?php echo $actr; ?>"/>
    <input type="hidden" name="rctr" value="<?php echo $rctr; ?>"/>
  <button type="submit" class="btn btn-success">SUBMIT</button>
    </form>
</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
    var cctr=<?php echo $cctr;?>;
    var actr=<?php echo $actr;?>;
    var rctr=<?php echo $rctr;?>;

    $(document).ready(function(){
                $("#add_drugs").click(function(){
                	ctemp = cctr;
                	cctr+=1;
                    $('<br id="bdt' + cctr + '"><textarea id="dt' + cctr + '" class="form-control" name="adt[]" placeholder=""></textarea> ').insertAfter("#dt"+ ctemp);
                });

                $("#rmv_drugs").click(function() {
                    if (cctr != <?php echo $cctr;?>) { 
                      $('#bdt' + cctr).remove();
                      $('#dt' + cctr).remove();
                      cctr -= 1; 
                    }
                });

                $("#add_allergy").click(function(){
                	atemp = actr;
                	actr+=1; 
                    $('<br id="bal' + actr + '"><textarea id="al' + actr + '" class="form-control" name="aal[]" placeholder=""></textarea> ').insertAfter("#al"+ atemp);                
                });

                $("#rmv_allergy").click(function() {
                    if (actr != <?php echo $actr;?>) { 
                      $('#bal' + actr).remove();
                      $('#al' + actr).remove();
                      actr -= 1; 
                    }
                });

                $("#add_chrail").click(function(){
                	rtemp = rctr;
                	rctr+=1;
                    $('<br id="bca' + rctr + '"><input id="ca' + rctr + '" class="form-control" name="aca[]" placeholder=""></textarea> ').insertAfter("#ca"+ rtemp);
                });

                $("#rmv_chrail").click(function() {
                    if (rctr != <?php echo $rctr;?>) { 
                      $('#bca' + rctr).remove();
                      $('#ca' + rctr).remove();
                      rctr -= 1; 
                    }
                });


    });
</script>