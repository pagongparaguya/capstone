<?php $this->load->view('header', array('num' => 2, 'title' => 'Add New Patient')); ?>
		<form method="post" action="<?php echo base_url();?>cadmin/add_patient_record" role="form">
		<div class="row clearfix">
  		<div class="col-lg-12 col-md-11 col-sm-12 columns">  			
                <div class="element-container">

                      <div class="page-header">
                        New appointment record for (patient name) on (date)
                      </div>
                      
                      <div class="col-lg-4 col-lg-offset-4 columns">
                        <label for="profile-gender">Dentist in Charge</label>
                        <select id="profile-gender" class="form-control" name="gender" required>
                                      <option value="" disabled default selected style="display:none;"></option>
                                      <option value="Male">Dr. Cynthia Gayatin</option>
                                      <option value="Female">Dr. John Gayatin</option>
                        </select><br>
                      </div>
                      
                      <div class="col-lg-6 columns col-lg-offset-3" style="margin-bottom: 10px;">
                          <label for="chief-complaint">Chief Complaint</label>
                          <textarea name="" id="chief-complaint" class="form-control" cols="50" rows="2" style="resize: none"></textarea>  
                      </div>

                      <div class="col-lg-6 columns col-lg-offset-3" style="margin-bottom: 10px;">
                          <label for="other-findings">Other Findings</label>
                          <textarea name="" id="other-findings" class="form-control" cols="50" rows="2" style="resize: none"></textarea>  
                      </div>

                      <div class="col-lg-12 columns col-lg-offset-3" style="margin-bottom: 10px;">
                          <div class="col-lg-4 columns">
                            <label for="tot-amt-of-treatments">Total Amount for Treatment(s) Performed (PHP)</label>
                            <span id="tot-amt-of-treatments" class="form-control" style="width: 60%;">(Total Amount)</span>
                          </div>
                          <div class="col-lg-2 columns">
                            <label for="amt-rcvd">Amount paid (PHP)</label>
                            <input id="amt-rcvd" class="form-control" type="number" min="0" />
                          </div>
                      </div>

                      <div class="col-lg-5 columns" style="margin: 10px 0 10px 0;">
                        <label for="treatment-rendered">Treatments Performed</label>
                        <button id="treatment-rendered" class="btn btn-info">Add treatment performed</button>
                        <button id="remove-treatment" class="btn btn-warning">Remove</button>
                      </div>

                      <table style="margin-top: 10px" class="table table-bordered table-striped" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th width="50%" style="text-align: center; font-weight: bold; font-size: 100%">Type of Treatment</th>
                            <th width="10%" style="text-align: center; font-weight: bold; font-size: 100%">Tooth</th>
                            <th width="25%" style="text-align: center; font-weight: bold; font-size: 100%">Tooth Surface</th>
                            <th width="15%" style="text-align: center; font-weight: bold; font-size: 100%">Price (PHP)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>GAYATIN DENTAL</td>
                            <td>GAYATIN DENTAL</td>
                            <td>GAYATIN DENTAL</td>
                            <td>GAYATIN DENTAL</td>
                          </tr>
                          <tr>
                            <td>GAYATIN DENTAL</td>
                            <td>GAYATIN DENTAL</td>
                            <td>GAYATIN DENTAL</td>
                            <td>GAYATIN DENTAL</td>
                          </tr>
                          <tr>
                            <td>GAYATIN DENTAL</td>
                            <td>GAYATIN DENTAL</td>
                            <td>GAYATIN DENTAL</td>
                            <td>GAYATIN DENTAL</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
  		</div>
                        
    </div>
              <div class="col-md-12 columns">
                <div>
                  <a href=""><button class="btn btn-info">Submit</button></a> 
                </div>
              </div>
          
          </div>
          </form>
</div>

<?php $this->load->view('footer'); ?>
<script type="text/javascript">
</script>