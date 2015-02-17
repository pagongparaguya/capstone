<?php $this->load->view('header', array('num' => 7, 'title' => 'Appointment Queue')); ?>
<div class="element-container">
    <legend>Pending Appointment Date</legend>
    <span id="message" style="color:red"></span>
      <div id="content" style="margin:20px">
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
        <thead>
            <tr>
                <th><center>Date</center></th>
            </tr>
        </thead> 
        <tbody>
         <?php foreach($dates as $date): ?>
            <tr>
              <td>
              <a style="text-decoration:none" href="<?php echo base_url();?>appointment/view_appointment_queue_time/<?php echo $date->date;?>"><?php echo date('F j, Y', strtotime($date->date));?></a></td>
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