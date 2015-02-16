<?php $this->load->view('header', array('num' => 7, 'title' => 'Upcoming Appointments')); ?>
<div class="element-container">
    <legend>Upcoming Appointments</legend>
    <span id="message" style="color:red"></span>
    
     <!-- <div class="row">
      <div class="row row-content"> -->
     <!-- <br><br><a href="<?php echo base_url();?>cadmin/new_patient" class="button info">Add New Patient</a><br><br>  -->
      <!-- <div id="container" style="margin:30px;">
      <div class="col-lg-3 columns">
          <label for="date">Date</label>
          <input id="date" class="form-control" type="date" name="date">
      </div>

      <div class="col-lg-3 columns">
          <label for="time">Time</label>
          <select id="time" class="form-control" name="time" required>
            <option value="" disabled default selected style="display:none;"></option>
            <option value="old">Old Patient</option>
            <option value="new">New Patient</option>
          </select>
      </div>
      <br>
     <button id="sear" type="button" class="btn btn-info">Search</button>
      </div> -->
      <div id="content" style="margin:20px">
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
        <thead>
            <tr>
                <th>Date</th>
            </tr>
        </thead> 
        <tbody>
         <?php foreach($dates as $date): ?>
            <tr>
              <td>
                <a style="text-decoration:none" href="<?php echo base_url();?>appointment/view_upcoming_appointments_timeslots/<?php echo $date->date;?>"><?php echo date('F j, Y', strtotime($date->date));?></a>
              </td>
            </tr>
          <?php endforeach;?>
        </tbody>
      </table>
      </div>
</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
    $(document).ready(function() {
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