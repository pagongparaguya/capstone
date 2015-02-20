<?php $this->load->view('header', array('num' => 1, 'title' => 'Clinic Calendar')); ?>
<?php 
$dates=$date["closed"];
$ctr=$date["ctr"];
$i;
;?>
<div class="col-xs-12 columns">
	<div class="element-container">
		<div class="text-center" id="clockbox"></div>	
		<div class="alert-success" style="margin: 0 30px 50px 30px; padding: 10px"><strong>Reminder</strong>: The minimum date for an appointment reservation is at least 2 days after the current date. If your appointment is very urgent, please contact the clinic. Thank you.</div>	
		<?php echo $calendar; ?>	
		<div class="alert-success text-center" style="margin: 5px 35px 50px 35px; padding: 10px;"><strong>Note</strong>: Select a date on the calendar to view the available timeslots.</div>	
	</div>
	<button class="btn btn-info btn-cancelapp">Cancel an appointment</button>
</div>


<div class="col-lg-4 col-lg-offset-4 columns">
<?php if($this->session->userdata("username")){?>
<button type="button" class="btn-opnsesched btn btn-info" data-target="#modal-opensched">Open a Schedule</button>
<button type="button" class="btn-closesched btn btn-info" data-target="#modal-closesched">Close a Schedule</button>
<?php } else {?>
<button type="button" style="display:none" class="btn-opnsesched btn btn-info" data-target="#modal-opensched">Open a Schedule</button>
<button type="button" style="display:none" class="btn-closesched btn btn-info" data-target="#modal-closesched">Close a Schedule</button>
<?php }?>
</div>
	
		<div class="row">
	  		<div class="col-md-12 columns">
	  						<div class="col-md-6 col-md-offset-3 columns">	

										  <!-- MODAL FOR CANCELLING AN APPOINTMENT -->									
	  								      <div class="modal fade" id="modal-cancelappointment" tabindex="-1" role="dialog" aria-labelledby="Cance an appointment" aria-hidden="true">
											  <div class="modal-dialog">
											    <div class="modal-content">

											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											        <h4 class="modal-title">Cancel an appointment</h4>
											      </div>

											      <div class="modal-body" style="width:50%; margin: 0 auto">
											        	<label>
											        		Username	
											        		<input style="width:138%; font-weight:normal" type="text" placeholder="Input your assigned username" class="form-control" required/>
											        	</label>
												        <br />
												        <label for="opsched-date">Date</label>
														<input id="opsched-date" class="form-control" name="date" type="date" placeholder="Date" required/>												      	
											      </div>

											      <div class="modal-footer">
											        <button type="button" class="btn btn-primary">Submit</button>
											      </div>
											    </div><!-- /.modal-content -->
											  </div><!-- /.modal-dialog -->
										  </div><!-- /.modal -->
										  <!-- END OF MODAL FOR CANCELLING A CLOSED APPOINTMENT -->									

	  								      <!-- MODAL FOR OPENING A SCHEDULE -->									
	  								      <div class="modal fade" id="modal-opensched" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											  <div class="modal-dialog">
											    <div class="modal-content">
										
											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											        <h4 class="modal-title">Open a day</h4>
											      </div>

											      <div class="modal-body">
												          <form method="post" role="form" action="<?php echo base_url();?>calendar\openday">
												        
														<label for="clsched-date">Open a closed date</label>
											
														
														<select id="open-type" class="form-control" name="date" required>
														<option   value=""></option>
														<?php for($i=0;$i<$ctr;$i++){?>
															<option value="<?php echo $dates[$i];?>"><?php echo date("F j, Y",strtotime($dates[$i]));?> </option>
														<?php }?>
														</select>
														<input class="btn btn-info" type="submit" value="submit" name="submit" required />
												      </form>	
												      	<!-- <label for="open-type">Open Type</label>
								  						<select id="open-type" class="form-control" name="open-type" required>
												          <option value="wholeday">Whole Day</option>
												          <option value="tslotsonly">Time Slots Only</option>
												        </select>	 -->
															</div>
												        

												      

											      <div class="modal-footer">
											        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											        
											      </div>
											    </div><!-- /.modal-content -->
											  </div><!-- /.modal-dialog -->
										  </div><!-- /.modal -->

										  <!-- END OF OPENING A SCHEDULE MODAL -->	  								      

	  								      <!-- MODAL FOR CLOSING A SCHEDULE -->
	  								      <div class="modal fade" id="modal-closesched" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											  <div class="modal-dialog">
											    <div class="modal-content">

											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											        <h4 class="modal-title">Close a Schedule</h4>
											      </div>

											      <div class="modal-body">
												  <form method="post" action=<?php echo base_url()."calendar\closeday";?> >
												        <label for="clsched-date">Close a day</label>
														<input class="form-control" id="cal-date" type="date" name="date" min=<?php echo date("Y-m-d");?> required/>
														<input class="btn btn-info" type="submit" value="submit" name="submit" required/>
												      </form>	
												      	<!-- <label for="close-type">Close Type</label>
								  						<select id="close-type" class="form-control" name="close-type" required>
												          <option value="wholeday">Whole Day</option>
												          <option value="tslotsonly">Time Slots Only</option>
												        </select>	 -->

												        

												    									        
											      </div>

											      <div class="modal-footer">
											        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											        
											      </div>
											    </div><!-- /.modal-content -->
											  </div><!-- /.modal-dialog -->
										  </div><!-- /.modal -->
	  								      <!-- END OF CLOSTING A SCHEDULE MODAL -->
				</div>
		</div>
</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
  $(document).ready(function(){
  	document.getElementsByClassName('btn-opensched')[0].onclick = function(){
  		$('#modal-opensched').modal('toggle');
  	};

  	document.getElementsByClassName('btn-closesched')[0].onclick = function(){
  		$('#modal-closesched').modal('toggle');
  	};

  	document.getElementsByClassName('btn-cancelapp')[0].onclick = function(){
  		$('#modal-cancelappointment').modal('toggle');
  	};   

  	$('.calendar .day').click(function(){	
		var d= new Date();
		var m=d.getMonth()+1;
		var y=d.getFullYear();
			d=d.getDate();
		day_num=$(this).find('.day_num').html();
			 data=$(this).find('.content').html();
			var temp1 = data.split("/");
			var temp2=temp1[7].split("-");
			var bool=1;
				/*if(d.getMonth()>now[8].substr(1) && d.getDate() > now[9] && d.getFullYear()>now[7])*/	
						/*if(d.getMonth()+1 <= now[8] && d.getFullYear() <= now[7]){
								bool=1;
								if((d.getMonth()+1) == now[8]) {
									if(d.getDate()>now[9])
									bool=0;
									
								}
									}	
									if(bool==1)*/
									
										if( temp1[8]=="closed" && (m==parseInt(temp2[1]) && d<=parseInt(temp2[2])) && y>=parseInt(temp2[0])){
												swal("ERROR","The date has been closed by the clinic","error");
										}
											
											else if(y<=parseInt(temp2[0]) || y>parseInt(temp2[0])){
													if((m==parseInt(temp2[1]) && y==parseInt(temp2[0]) && d>parseInt(temp2[2])) || (m>parseInt(temp2[1]) && y>=parseInt(temp2[0])))
														bool=2;
													
																
														else 	
																window.location.assign(data);
												}	
											
											 
													
										
  });

  	
  });

  tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
    tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

      function GetClock(){
        var d=new Date();
        var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear(),nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

               if(nhour==0){ap=" AM";nhour=12;}
          else if(nhour<12){ap=" AM";}
          else if(nhour==12){ap=" PM";}
          else if(nhour>12){ap=" PM";nhour-=12;}

          if(nyear<1000) nyear+=1900;
          if(nmin<=9) nmin="0"+nmin;
          if(nsec<=9) nsec="0"+nsec;

          document.getElementById('clockbox').innerHTML="<br/><br/><h4><strong style='text-transform: uppercase'>"+tday[nday]+"</strong><br/> "+tmonth[nmonth]+" "+ndate+", "+nyear+" <br/><br/><span class='glyphicon glyphicon-time'></span> "+nhour+":"+nmin+":"+nsec+ap+"</h4>";
      }

      window.onload=function(){
        GetClock();
        setInterval(GetClock,1000);
      }
</script>
