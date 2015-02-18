<?php $this->load->view('header', array('num' => 1, 'title' => 'Schedule Timeslots')); ?>
<div class="col-md-12 col-lg-12 columns">
				<div class="col-md-4 col-lg-3 columns"></div>
				<div class="col-md-4 col-sm-12 col-lg-6 columns">					
						<div class="element-container nomargin-element-container">
							<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
							        <thead>
							            <tr>
							            <?php foreach($prof as $prof):?>
							                <th colspan="2" style="text-align: center; font-weight: bold; font-size: 150%"><?php echo $prof->firstname;?>'s History of Appointments</th>
							            <?php endforeach;?>
							            </tr>
							            <tr>
							            	<th>Date</th>
							            	<th>Dentist in Charge</th>
							            </tr>
							        </thead>
							 
							        <tbody id="tbody" style="text-align: center">	
							        <?php $ctr=0;foreach($record as $record):$ctr+=1;?>					          
							            <tr>			                
							            	<td width="60%"><?php echo date("F j, Y",strtotime($record->date));?></td>
							            	<td width="40%"><?php echo $record->dentistincharge;?></td>
							            </tr>
							          <?php endforeach;?>
							        </tbody>
							      </table>
						</div>				       
				</div>
				<div class="col-md-4 col-lg-3 columns"></div>
</div>
<?php $this->load->view('footer'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        var ctr = <?php echo $ctr;?>;
        if(ctr==0){
           $('<span style="color:blue; font-size:20px; font-weight:bold;"><center>NO DATA TO DISPLAY</center></span>').insertAfter("#example");
        }
     });
</script>