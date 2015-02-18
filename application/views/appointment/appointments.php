<?php $this->load->view('header', array('num' => 7, 'title' => 'Appointments')); ?>
<div class="element-container">
    <legend>Appointments</legend>
    <span id="message" style="color:red"></span>
      <div id="content" style="margin:20px">
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
        <thead>
            <tr>
                <th><center>Username</center></th>
                <th><center>Date</center></th>
                <th><center>Time</center></th>
            </tr>
        </thead> 
        <tbody>
         <?php foreach($appointments as $appointment): ?>
          <tr>
              <td>
              <a style="text-decoration:none" href="<?php echo base_url();?>appointment/view_appointment_queue_time/<?php echo $date->date;?>"><?php echo $appointment->firstname;?> <?php echo $appointment->middlename;?> <?php echo $appointment->lastname;?></a></td>
            </tr>
            <tr>
              <td><?php echo date("F j, Y",strtotime($appointment->date));?></td>
            </tr>
            <tr>
              <td><?php echo $appointment->time;?></td>
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
    });
</script>