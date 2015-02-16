<?php $this->load->view('header', array('num' => 1, 'title' => 'Date of Appointment Record')); ?>
<div class="col-md-12 col-lg-12 columns">
				<div class="col-md-4 col-lg-3 columns"></div>
				<div class="col-md-4 col-sm-12 col-lg-6 columns">					
						<div class="element-container nomargin-element-container">
							<h3>Date of Appointment</h3>
							<br>
							<h5>Dentist in Charge: (name of dentist)</h5>
							<h5>Total Amount for Services Rendered (PHP): (The amount)</h5>
							<h5>Amount of Payment Received (PHP): (The amount) </h5>
							<h5>Remaining Balance: (The amount) </h5>

							<br><br>
							<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
							        <thead>
							            <tr>
							                <th style="text-align: center; font-weight: bold; font-size: 100%">Service Rendered</th>
							                <th style="text-align: center; font-weight: bold; font-size: 100%">Tooth</th>
							                <th style="text-align: center; font-weight: bold; font-size: 100%">Part of Tooth</th>
							                <th style="text-align: center; font-weight: bold; font-size: 100%">Price of Service Rendered (PHP)</th>
							            </tr>
							        </thead>
							 
							        <tbody style="text-align: center">						          
							            <tr>					                
							            	<td>Tuli</td>
							            	<td>Top</td>
							            	<td>Meshial</td>
							            	<td>100</td>
							            </tr>							            
							            <tr>					                
							            	<td>Tuli</td>
							            	<td>Top</td>
							            	<td>Meshial</td>
							            	<td>100</td>
							            </tr>							            
							            <tr>					                
							            	<td>Tuli</td>
							            	<td>Top</td>
							            	<td>Meshial</td>
							            	<td>100</td>
							            </tr>							            
							        </tbody>
							      </table>
						</div>				       
				</div>
				<div class="col-md-4 col-lg-3 columns"></div>
</div>
<?php $this->load->view('footer'); ?>