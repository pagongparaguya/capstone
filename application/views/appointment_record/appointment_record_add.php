<?php $this->load->view('header', array('num' => 2, 'title' => 'Add New Patient')); ?>		
<form method="post" action="<?php echo base_url();?>cadmin/add_patient_record" role="form">
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

                      <div class="col-lg-5 columns" style="margin: 10px 0 10px 0;">
                        <label for="treatment-rendered">Treatments Performed</label>
                        <button id="treatment-rendered" class="btn btn-info">Add treatment performed</button>
                        <button id="remove-treatment" class="btn btn-warning">Remove</button>
                      </div>

                      <table style="margin-top: 10px" class="table" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th width="35%" style="text-align: center; font-weight: bold; font-size: 100%">Type of treatment</th>
                            <th width="35%" style="text-align: center; font-weight: bold; font-size: 100%">Application</th>
                            <th width="15%" style="text-align: center; font-weight: bold; font-size: 100%">Treatment price (PHP)</th>
                            <th width="15%" style="text-align: center; font-weight: bold; font-size: 100%">Total price (PHP)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>

                            <!-- PER TOOTH TREATMENT -->
                            <td class="text-center">(Per tooth) /tooth</td>
                            <td class="text-center" style="display: inline-flex" width="100%">
                                <input placeholder="Tooth #" type="number" class="form-control" style="margin-right:5px; width:25%;" pattern="[1-8]{2}" />
                                <select id="apptype" style="margin-right:5px; width:40%;" class="form-control" name="apptype" required>
                                      <option value="Mesial">Mesial</option>
                                      <option value="Distal">Distal</option>
                                      <option value="Labial">Labial</option>
                                      <option value="Buccal">Buccal</option>
                                      <option value="Lingual">Lingual</option>
                                </select>                                
                                <button style="width:35%" class="btn btn-info">Add tooth</button>
                            </td>
                            <td class="text-center">Price of the treatment</td>
                            <td class="text-center">Price of treatment X number of elements</td>
                          </tr>

                          <!-- PER QUADRANT TREATMENT -->   
                          <tr>
                            <td class="text-center">(Per quadrant) /quadrant</td>
                            <td class="text-center" style="display: inline-flex" width="100%">
                                <div style="width:80%; display:inline-flex; margin: 0 auto">
                                    <select id="apptype" style="width:50%; margin-right: 5px" class="form-control" name="apptype" required>
                                          <option value="Upper right">Upper right</option>
                                          <option value="Upper left">Upper left</option>
                                          <option value="Lower right">Lower right</option>
                                          <option value="Lower left">Lower left</option>
                                          <option value="All">All</option>
                                    </select>
                                  <button class="btn btn-info">Add quadrant</button>
                                </div>
                            </td>
                            <td class="text-center">Price of the treatment</td>
                            <td class="text-center">Price of treatment X number of elements</td>
                          </tr>

                          <!-- PER UNIT TREATMENT -->        
                          <tr>
                            <td class="text-center">(Per unit) /unit</td>
                            <td class="text-center" style="display: inline-flex" width="100%">
                                <div style="width:60%; display:inline-flex; margin: 0 auto">
                                  <input placeholder="Tooth #" style="width:45%; margin-right:5px" type="number" class="form-control" pattern="[1-8]{2}" />                                
                                  <button style="width:55%" class="btn btn-info">Add tooth</button>
                                </div>
                            </td>
                            <td class="text-center">Price of the treatment</td>
                            <td class="text-center">Price of treatment X number of elements</td>
                          </tr>

                          <!-- PER CANAL TREATMENT -->
                          <tr>
                            <td class="text-center">(Per canal) /canal</td>
                            <td class="text-center" style="display: inline-flex" width="100%">
                                <div style="width:60%; display:inline-flex; margin: 0 auto">
                                  <input placeholder="Tooth #" style="width:45%; margin-right:5px" type="number" class="form-control" pattern="[1-8]{2}" />                                
                                  <button style="width:55%" class="btn btn-info">Add tooth</button>
                                </div>
                            </td>
                            <td class="text-center">Price of the treatment</td>
                            <td class="text-center">Price of treatment </td>
                          </tr>

                          <!-- PER POST TREATMENT -->
                          <tr>
                            <td class="text-center">(Per post) /post</td>
                            <td class="text-center" style="display: inline-flex" width="100%">
                                <div style="width:60%; display:inline-flex; margin: 0 auto">
                                  <input placeholder="Tooth #" style="width:45%; margin-right:5px" type="number" class="form-control" pattern="[1-8]{2}" />                                
                                  <button style="width:55%" class="btn btn-info">Add tooth</button>
                                </div>
                            </td>
                            <td class="text-center">Price of the treatment</td>
                            <td class="text-center">Price of treatment X number of elements</td>
                          </tr>

                          <!-- PER APPLIANCE TREATMENT -->
                          <tr>
                            <td class="text-center">(Per appliance) /appliance</td>
                            <td class="text-center" style="display: inline-flex" width="100%">
                                <div style="width:35%; display:inline-flex; margin: 0 auto">
                                    <select id="apptype" style="margin-right: 5px" class="form-control" name="apptype" required>
                                          <option value="Upper">Upper</option>
                                          <option value="Lower">Lower</option>
                                          <option value="Whole">Whole</option>
                                    </select>
                                </div>
                            </td>
                            <td class="text-center">Price of the treatment</td>
                            <td class="text-center">Price of treatment</td>
                          </tr>

                          <!-- PER ARCH TREATMENT -->
                          <tr>
                            <td class="text-center">(Per arch) /arch</td>
                            <td class="text-center" style="display: inline-flex" width="100%">
                                <div style="width:95%; display:inline-flex; margin: 0 auto">
                                    <select id="apptype" style="margin-right:5px; width: 65%" class="form-control" name="apptype" required>
                                          <option value="Lower">Removable partial denture</option>
                                          <option value="Upper">Full denture</option>                                          
                                    </select>
                                    <!-- AYHA RA MUGAWAS ANG BUTTON BASTA REMOVABLE PARTIAL DENTURE ANG GIPILI NGA APPLICATION-->
                                    <button style="width:35%" class="btn btn-info">Add tooth</button>
                                </div>
                            </td>
                            <td class="text-center">Price of the treatment</td>
                            <td class="text-center">Price of treatment</td>
                          </tr>

                        </tbody>
                      </table>

                      <div class="col-lg-5 col-lg-offset-2 columns">
                        <label for="tot-amt-of-treatments">Total Amount for Treatment(s) Performed (PHP)</label>
                        <span id="tot-amt-of-treatments" class="form-control" style="width: 60%;">(Total Amount)</span>
                      </div>
                      <div class="col-lg-3 columns">
                        <label for="amt-rcvd">Amount paid (PHP)</label>
                        <input id="amt-rcvd" class="form-control" type="number" min="0" />
                      </div>
                      
                      <br/><br/><br/> 
                      <a class="sbmit" href=""><button class="btn btn-info">Submit</button></a> 
                      
                        
                      
                </div>
</form>


<?php $this->load->view('footer'); ?>
<script type="text/javascript">
</script>