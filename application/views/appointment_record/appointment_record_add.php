<?php $this->load->view('header', array('num' => 2, 'title' => 'Add New Patient')); ?>		
<form method="post" action="<?php echo base_url();?>cadmin/add_patient_record" role="form">
                <div class="element-container">
                      <div class="page-header">
                        New appointment record for (patient name) on (date)
                      </div>
                      
                      <div class="col-lg-4 col-lg-offset-4 columns">
                        <label for="dic">Dentist in Charge</label>
                        <select id="dic" class="form-control" name="dentist" required>
                                      <option value="" disabled default selected style="display:none;"></option>
                                      <option value="Dr. Cynthia Gayatin">Dr. Cynthia Gayatin</option>
                                      <option value="Dr. John Gayatin">Dr. John Gayatin</option>
                        </select><br>
                      </div>
                      
                      <div class="col-lg-6 columns col-lg-offset-3" style="margin-bottom: 10px;">
                          <label for="cc">Chief Complaint</label>
                          <textarea name="complaint" id="cc" class="form-control" cols="50" rows="2" style="resize: none"></textarea>  
                      </div>

                      <div class="col-lg-6 columns col-lg-offset-3" style="margin-bottom: 10px;">
                          <label for="of">Other Findings</label>
                          <textarea name="finding" id="of" class="form-control" cols="50" rows="2" style="resize: none"></textarea>  
                      </div>

                      <div class="col-lg-5 columns" style="display:inline-flex; margin: 10px 0 10px 0;">
                        <!-- <label for="atf">Treatments Performed</label> -->
                        <select id="type" style="width:50%; margin-right:5px;" class="form-control" name="type" required>
                                      <option value="" disabled default selected style="display:none;">Treatment Type</option>
                                      <option value="Tooth">Tooth</option>
                                      <option value="Unit">Unit</option>
                                      <option value="Post">Post</option>
                                      <option value="Canal">Canal</option>
                                      <option value="Arch">Arch</option>
                                      <option value="Appliance">Appliance</option>
                                      <option value="Quadrant">Quadrant</option>
                        </select>
                        <button id="atf" style="margin-right:5px" type="button" class="btn btn-info">Add treatment</button>
                        <!-- <button id="atf" type="button" class="btn btn-info">Add unit treatment</button> -->
                        <!-- <button id="atf" type="button" class="btn btn-info">Add post treatment</button>
                        <button id="atf" type="button" class="btn btn-info">Add canal treatment</button>
                        <button id="atf" type="button" class="btn btn-info">Add arch treatment</button> -->
                        <!-- <button id="atf" type="button" class="btn btn-info">Add appliance treatment</button> -->
                        <!-- <button id="atf" type="button" class="btn btn-info">Add quadrant treatment</button> -->

                        <button id="remove" style="margin-right:5px" type="button" class="btn btn-warning">Remove</button>
                      </div>

                      <table id="tbl" style="margin-top: 10px" class="table" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th width="35%" style="text-align: center; font-weight: bold; font-size: 100%">Type of treatment</th>
                            <th width="35%" style="text-align: center; font-weight: bold; font-size: 100%">Application</th>
                            <th width="15%" style="text-align: center; font-weight: bold; font-size: 100%">Treatment price (PHP)</th>
                            <th width="15%" style="text-align: center; font-weight: bold; font-size: 100%">Total price (PHP)</th>
                          </tr>
                        </thead>
                        <tbody id="tbl1">
                          

                        
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
                      
                      <br/><br/><br/><br/>
                      <button id="sub" type="submit" class="btn-lg btn-success">Submit</button>
                      
                        
                      
                </div>
</form>


<?php $this->load->view('footer'); ?>
<script type="text/javascript">
  var ctr=1;

$(document).ready(function(){

  // $('#tooth').hide();
  // $('#unit').hide();
  // $('#post').hide();
  // $('#canal').hide();
  // $('#arch').hide();
  // $('#appliance').hide();
  // $('#quadrant').hide();

  $('#atf').click(function(){
    if($('#type').val()!=null){
      temp = ctr;
      // hold = temp-1;
      // if(hold!=1){
      //   $('#drptp'+hold).prop('disabled','disabled');
      // }
      ctr+=1;
      $('<tr id="tbl'+ctr+'"><td><select required id="'+temp+'" style="margin-right:5px; width:40%;" class="form-control trtype"name="ttype[]" required></td><td id="ndd"></td><td><span><center id="ptd'+temp+'"></center></span><input id="pr'+temp+'"type="hidden" value="0" name="price[]" class="price" /></td><td><span><center id="tptd'+temp+'"></center></span><input id="tpr'+temp+'"type="hidden" value="0" name="tprice[]" /></td></tr>').insertAfter("#tbl"+ temp);
      $.ajax({
          url:"<?php echo base_url(); ?>records/get_services",    
          data: {type: $('#type').val()},
          type: "POST",
          success: function(data){
              
              $("#"+temp).html(data);
          }
      }); 

    }else{
      swal('ERROR','Pick treatment type first','error');
    }
  });

  $("#remove").click(function() {
      if (ctr != 1) { 
        $('#tbl' + ctr).remove();
        ctr -= 1; 
      }else{
        swal('ERROR','No more to remove','error');
      }
  });

  $('#sub').click(function(event){
    if($('#searchTable tbody').children().length == 0){
      swal('ERROR','No treatment rendered','error');
      event.preventDefault();
    }
  });

  $(document).on("change", ".trtype", function(e) {
    // swal('OHO',this.options[e.target.selectedIndex].index,'success');
        var id = this.id;
          $.ajax({
              url:"<?php echo base_url(); ?>records/get_price",    
              data: {name: this.options[e.target.selectedIndex].text},
              type: "POST",
              success: function(data){
                  $('#pr'+id).val(data);
                  $('#ptd'+id).html(data);
              }
          }); 
      });

});

</script>





<!-- <tr>

                            PER TOOTH TREATMENT
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

                          PER QUADRANT TREATMENT   
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

                          PER UNIT TREATMENT        
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

                          PER CANAL TREATMENT
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

                          PER POST TREATMENT
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

                          PER APPLIANCE TREATMENT
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

                          PER ARCH TREATMENT
                          <tr>
                            <td class="text-center">(Per arch) /arch</td>
                            <td class="text-center" style="display: inline-flex" width="100%">
                                <div style="width:95%; display:inline-flex; margin: 0 auto">
                                    <select id="apptype" style="margin-right:5px; width: 65%" class="form-control" name="apptype" required>
                                          <option value="Lower">Removable partial denture</option>
                                          <option value="Upper">Full denture</option>                                          
                                    </select>
                                    AYHA RA MUGAWAS ANG BUTTON BASTA REMOVABLE PARTIAL DENTURE ANG GIPILI NGA APPLICATION
                                    <button style="width:35%" class="btn btn-info">Add tooth</button>
                                </div>
                            </td>
                            <td class="text-center">Price of the treatment</td>
                            <td class="text-center">Price of treatment</td>
                          </tr>  -->