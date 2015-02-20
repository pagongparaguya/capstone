<?php $this->load->view('header', array('num' => 2, 'title' => 'Add New Patient')); ?>		
<form method="post" action="<?php echo base_url();?>records/add_appointment_record" role="form">
                <div class="element-container">
                      <div class="page-header">
                      <?php foreach($prof as $prof):?>
                        New appointment record for <?php echo $prof->firstname;?> <?php echo $prof->middlename;?> <?php echo $prof->lastname;?> on <?php echo date("F j, Y",strtotime($date));?>
                      <input type="hidden" value="<?php echo $prof->id;?>" name="patient_id"/>
                      <input type="hidden" value="<?php echo $date;?>" name="date"/>
                      <?php endforeach;?>
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
                                      <!-- <option value="Unit">Unit</option> -->
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

                      <table id="mytable" style="margin-top: 10px" class="table" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th width="35%" style="text-align: center; font-weight: bold; font-size: 100%">Type of treatment</th>
                            <th width="35%" style="text-align: center; font-weight: bold; font-size: 100%">Application</th>
                            <th width="30%" style="text-align: center; font-weight: bold; font-size: 100%">Treatment price (PHP)</th>
                            <!-- <th width="15%" style="text-align: center; font-weight: bold; font-size: 100%">Total price (PHP)</th> -->
                          </tr>
                        </thead>
                        <tbody id="tbl1">
                          
                          
                        
                        </tbody>
                      </table>
                      

                      <div class="col-lg-5 col-lg-offset-2 columns">

                        <label for="tot-amt-of-treatments">Total Amount for Treatment(s) Performed (PHP)</label>
                        <span id="tot-amt-of-treatments" class="form-control" style="width: 60%;">0</span>
                        <button id="calculate" class="btn btn-info" style="margin-top:5px;" type="button">Calculate Total Amount</button>
                        <input id="total" name="total_amount" class="form-control" type="hidden" value="0" required/>
                      </div>
                      <div class="col-lg-3 columns">
                        <label for="amt-rcvd">Amount paid (PHP)</label>
                        <input id="amt-rcvd" class="form-control" type="number" value="0" min="0" required/>
                      </div>
                      
                      <br/><br/><br/><br/><br/><br/>
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
      $('<tr id="tbl'+ctr+'"><td style="text-align:center"><select required id="'+temp+'" style="margin-right:5px; margin-top:20px; width:80%;" class="form-control trtype"name="ttype[]" required></td><td id="ndd'+temp+'" class="text-center" style="display: inline-flex" width="100%"></td><td><span><center id="ptd'+temp+'"></center></span><input id="pr'+temp+'"type="hidden" value="0" name="price[]" class="price" /></td></tr>').insertAfter("#tbl"+ temp);
      $.ajax({
          url:"<?php echo base_url(); ?>records/get_services",    
          data: {type: $('#type').val()},
          type: "POST",
          success: function(data){
              
              $("#"+temp).html(data);
          }
      }); 

      if($('#type').val() == 'Tooth'){
        $('<div class="col-md-12"><div class="col-md-6"><input placeholder="Tooth #" type="number" name="ttoothno[]" class="form-control" style="margin-right:5px; width:100%;" pattern="[1-8]{2}" required/></div><div class="col-md-6"><select style="margin-right:5px; width:100%;" class="form-control" name="ttyppe[]" required><option value="Mesial">Mesial</option><option value="Distal">Distal</option><option value="Labial">Labial</option><option value="Buccal">Buccal</option><option value="Lingual">Lingual</option></select></div>').insertAfter("#ndd"+ temp);
      }

      else if($('#type').val() == 'Quadrant'){
        $('<select id="apptype" style="width:80%; margin-right: 5px" class="form-control" name="qtype[]" required><option value="Upper right">Upper right</option><option value="Upper left">Upper left</option><option value="Lower left">Lower left</option><option value="All">All</option></select>').insertAfter("#ndd"+ temp);
      }

      else if($('#type').val() == 'Appliance'){
        $('<select id="apptype" style="width:80%; margin-right: 5px" name="atype[]" class="form-control" name="apptype" required><option value="Upper">Upper</option><option value="Lower">Lower</option><option value="Whole">Whole</option></select>').insertAfter("#ndd"+ temp);
      }

      else{
        $('<input placeholder="Tooth #" type="number" name="otoothno[]" class="form-control" style="margin-right:5px; width:80%;" pattern="[1-8]{2}" required/>').insertAfter("#ndd"+ temp);
      }


    }else{
      swal('ERROR','Pick treatment type first','error');
    }

    // $('.price').each(function() {
    //     sum += Number($(this).val());
    // });
    // $('#total').val(sum);
    // $('#tot-amt-of-treatments').html(sum);
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
    count = 0;
    $('.price').each(function(){
      count += Number($(this).val());
    });
    if(ctr==1){
      swal('ERROR','No treatment rendered','error');
      event.preventDefault();
    }
    if($('#total').val()!=count){
      swal('ERROR','Calculate total before you proceed','error');
      event.preventDefault();
    }
    if($('#total').val()>$('#amt-rcvd').val()){
      swal('ERROR','Amount paid is insuffient','error');
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

  $('#calculate').click(function(){
    sum=0;
    $('.price').each(function(){
      sum += Number($(this).val());
    });

    $('#tot-amt-of-treatments').html(sum);
    $('#total').val(sum);
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