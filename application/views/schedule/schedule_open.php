<?php $this->load->view('header', array('num' => 1, 'title' => 'Open Schedule')); ?>
<section id="main-slider" style="margin:100px">
		<form method="post" action="<?php echo base_url();?>cadmin/add_patient" role="form">
			<div class="row clearfix">
				
				<div class="row" style="margin:10px 50px;">
					<div class="col-md-6 columns">
					<legend>Open Schedule</legend>
			        <span>DATE</span>
			        <input class="form-control" name="date" type="date" placeholder="Date" /><br>
			        <span>TIME</span>
			        <select class="form-control" name="time">
			          <option value="">9:00am - 10:00am</option>
			          <option value="">10:00am - 11:00am</option>
			          <option value="">11:00am - 12:00pm</option>
			          <option value="">1:00pm - 2:00pm</option>
			          <option value="">2:00pm - 3:00pm</option>
			          <option value="">3:00pm - 4:00pm</option>
			        </select><br>
			        <button type="submit" class="btn btn-success">Close Schedule</button><br><br>
					</div>
				</div>
			</div>
		</form>
</section>	
<?php $this->load->view('footer'); ?>