<?php $this->load->view('header', array('num' => 7, 'title' => 'Appointment Queue')); ?>
<div class="element-container">
    <legend><?php echo date("F j, Y", strtotime($date));?></legend>
    <span id="message" style="color:red"></span>

      <div id="content" style="margin:20px">
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
        <thead>
        </thead>
        <tbody id="tbody" style="text-align: center">                     
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default" width="100%">
                      <div class="panel-heading">
                           <span>9:00 AM - 10:00 AM</span>
                      </div>
                      <div class="panel-body">  
                      <?php $actr=0; foreach($time_reservations as $ts):?>
                      <?php if($ts->time == '9:00 AM - 10:00 AM'){ $actr+=1;?>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact No.</th>
                                <th>Patient Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->mobileno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">ACCEPT</button></a>  
                              <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      <?php } ?>
                    <?php endforeach;?>
                    <span id="a" style="color:blue; font-size:20px; font-weight:bold;"></span>
                      </div>
                  </div>
              </td> 
            </tr>
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>10:00 AM - 11:00 AM</span>
                      </div>
                        <div class="panel-body">
                      <?php $bctr=0; foreach($time_reservations as $ts): ?>
                      <?php if($ts->time == '10:00 AM - 11:00 AM'){ $bctr+=1;?>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact No.</th>
                                <th>Patient Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->mobileno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      <?php } ?>
                    <?php endforeach;?>
                    <span id="b" style="color:blue; font-size:20px; font-weight:bold;"></span>
                        </div>
                  </div>
              </td>
             
            </tr>
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>11:00 AM - 12:00 PM</span>
                      </div> 
                        <div class="panel-body">
                     <?php $cctr=0; foreach($time_reservations as $ts): ?>
                      <?php if($ts->time == '11:00 AM - 12:00 PM'){ $cctr+=1;?> 
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact No.</th>
                                <th>Patient Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->mobileno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      <?php } ?>
                    <?php endforeach;?>
                    <span id="c" style="color:blue; font-size:20px; font-weight:bold;"></span>
                        </div>
                    <span></span>
                  </div>
              </td>
             
            </tr>
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>1:00 PM - 2:00 PM</span>
                      </div>
                      <div class="panel-body">  
                      <?php $dctr=0; foreach($time_reservations as $ts): ?>
                      <?php if($ts->time == '1:00 PM - 2:00 PM'){ $dctr+=1;?>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact No.</th>
                                <th>Patient Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->mobileno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      <?php } ?>
                    <?php endforeach;?>
                    <span id="d" style="color:blue; font-size:20px; font-weight:bold;"></span>
                      </div>
                  </div>
              </td>
             
            </tr>
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>2:00 PM - 3:00 PM</span>
                      </div>
                      <div class="panel-body">  
                     <?php $ectr=0; foreach($time_reservations as $ts): ?>
                      <?php if($ts->time == '2:00 PM - 3:00 PM'){ $ectr+=1;?>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact No.</th>
                                <th>Patient Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->mobileno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      <?php } ?>
                    <?php endforeach;?>
                    <span id="e" style="color:blue; font-size:20px; font-weight:bold;"></span>
                      </div>
                  </div>
              </td>
             
            </tr>
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>3:00 PM - 4:00 PM</span>
                      </div>
                      <div class="panel-body">  
                      <?php $fctr=0; foreach($time_reservations as $ts): ?>
                      <?php if($ts->time == '3:00 PM - 4:00 PM'){ $fctr+=1;?>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact No.</th>
                                <th>Patient Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->mobileno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      <?php } ?>
                    <?php endforeach;?>
                    <span id="f" style="color:blue; font-size:20px; font-weight:bold;"></span>
                      </div>
                  </div>
              </td>
             
            </tr>                     
            <!-- <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>3:00 - 4:00 PM</span>
                      </div>
                      <div class="panel-body">  
                      <?php $gctr=0; foreach($time_reservations as $ts): ?>
                      <?php if($ts->time == '3:00 - 4:00 PM'){ $gctr+=1;?>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact No.</th>
                                <th>Patient Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->mobileno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      <?php } ?>
                    <?php endforeach;?>
                    <span id="g" style="color:blue; font-size:20px; font-weight:bold;"></span>
                      </div>
                  </div>
              </td>
             
            </tr> -->
        </tbody>
      </table>
      </div>

     <!--  <div class="about-us-content col-sm-12 col-md-12 col-lg-12 columns ">
        <div class="col-md-1 col-lg-3 columns"></div>
        <div class="col-sm-12 col-md-10 col-lg-6 columns">
                  <div class="panel panel-default frame about-us-frame">
                      <div class="panel-heading">
                           <span class="glyphicon glyphicon-home"></span>
                           <span>Visit Our Clinic</span>
                      </div>
                      <div class="panel-body">
                            Subangdako, Mandaue City, Cebu
                      </div>
                  </div>
                  
                  <div class="panel panel-default frame about-us-frame">
                      <div class="panel-heading">
                            <span class="glyphicon glyphicon-phone-alt"></span>
                            <span>Contact Us</span>
                      </div>
                      <div class="panel-body">
                            <p>344 - 0377</p>
                            <p>511 - 9250</p>
                      </div>
                  </div>
                  
                  <div class="panel panel-default frame about-us-frame">
                      <div class="panel-heading">
                          <span class="glyphicon glyphicon-time"></span>
                          <span>Clinic Schedules</span>
                      </div>
                  
                      <div class="panel-body">
                          
                              <p class="italicized">Monday - Friday</p>
                              <p>7:30am - 4:00pm</p>
                              <p>(on school days)</p>
                              <p>9:00am - 5:00pm</p>
                              <p>(on summer)</p>
                          
                      
                          
                              <p class="italicized">Saturday</p>
                              <p>9:00am - 5:00pm</p>
                          
                      </div>
                  </div>
          </div>
          <div class="col-md-1 col-lg-3 columns"></div>      
</div> -->

</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        var actr = <?php echo $actr;?>;
        var bctr = <?php echo $bctr;?>;
        var cctr = <?php echo $cctr;?>;
        var dctr = <?php echo $dctr;?>;
        var ectr = <?php echo $ectr;?>;
        var fctr = <?php echo $fctr;?>;
        var gctr = <?php echo $gctr;?>;
        if(actr==0){
          $('#a').html("NO PENDING APPOINTMENT");
        }
        if(bctr==0){
          $('#b').html("NO PENDING APPOINTMENT");
        }
        if(cctr==0){
          $('#c').html("NO PENDING APPOINTMENT");
        }
        if(dctr==0){
          $('#d').html("NO PENDING APPOINTMENT");
        }
        if(ectr==0){
          $('#e').html("NO PENDING APPOINTMENT");
        }
        if(fctr==0){
          $('#f').html("NO PENDING APPOINTMENT");
        }
        if(gctr==0){
          $('#g').html("NO PENDING APPOINTMENT");
        }
        $('#example').dataTable();

        // $('#add').click(function(){
        //   $('#stfmod').modal({backdrop: 'static',keyboard: false}); 
        //   $('#stfmod').modal('show');
        // });
        // $('#content').hide();
        // $('#sear').click(function(){
        //   if($('#date').val()==''){
        //     $('#message').html("Date / Time is blank.");
        //   }
        //   else if($("#time :selected").val()==''){
        //     $('#message').html("Date / Time is blank.");
        //   }
        //   else{
        //     $('#message').html("");
        //     alert('a');
        //   }
        // });
    });
</script>