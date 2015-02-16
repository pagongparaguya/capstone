<?php
class Appointment extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('gayatin_appointment_model');
		$this->load->model('gayatin_model');
	}

	// public function new_appointment(){
	// 	$data['val']=0;
	// 	$this->load->view('appointment/appointment_new',$data);
	// }

	// public function add_appointment(){
	// 	if($this->input->post('fname')!=""){
	// 		$data = array('firstname' =>  mysql_real_escape_string($this->input->post('fname')),
	// 					  'lastname' => mysql_real_escape_string($this->input->post('lname')),
	// 					  'middlename' => mysql_real_escape_string($this->input->post('mname')),
	// 					  'mobileno' => mysql_real_escape_string($this->input->post('cnum')),
	// 					  'telno' => mysql_real_escape_string($this->input->post('tnum')),
	// 					  'patienttype' => mysql_real_escape_string($this->input->post('ptype')),
	// 					  'date' => mysql_real_escape_string($this->input->post('date')),
	// 					  'time' => mysql_real_escape_string($this->input->post('time')));
			
	// 		$today = strtotime(date("Y-m-d"));
	// 		$adate = strtotime($this->input->post('date'));
	// 		if($adate>$today){
	// 		//DO TEXT
	// 			$chk = $this->gayatin_appointment_model->check_scheduled_appointment($data);
	// 			if($chk == 0){
	// 				$this->gayatin_appointment_model->add_appointment_queue($data);
	// 				echo "<script>alert('Successfully added to queue.');</script>";
	// 				if($this->session->userdata('username')){
	// 					echo "<meta http-equiv=Refresh content=0;url=../appointment/view_appointment_queue>";
	// 				}
	// 				else{
	// 					$data['val'] = 1;
	// 					$this->load->view('appointment/appointment_issue',$data);
	// 				}
	// 			}
	// 			else{
	// 				echo "<script>alert('Scheduled time for the picked date is already taken. Please pick another time/date.');</script>";
	// 				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
	// 			}
	// 		}
	// 		else{
	// 			echo "<script>alert('Scheduled appointment should be at least a day prior to the schedule.');</script>";
	// 			echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
	// 		}
	// 	}
	// 	else 
	// 		redirect('appointment/new_appointment');
	// }

	public function add_pending_appointment(){
		if($this->input->post('fname')==''){
			$chk = $this->gayatin_model->check_username($this->input->post('opatient-usrname'));
			if($chk==1){
				$chck = $this->gayatin_appointment_model->check_duplicate_pending_appointment($this->input->post('opatient-usrname'),$this->input->post('odate'));
				$chck1 = $this->gayatin_appointment_model->check_duplicate_upcoming_appointment($this->input->post('opatient-usrname'),$this->input->post('odate'));
				if($chck!=1 && $chck1!=1){
					$q = $this->gayatin_model->get_patient_info($this->input->post('opatient-usrname'));
					$data = array('username' => $q->username,
								  'firstname' => $q->firstname,
								  'lastname' => $q->lastname,
								  'middlename' => $q->middlename,
								  'mobileno' => $q->mobileno,
								  'telno' => $q->telno,
								  'patienttype' => mysql_real_escape_string($this->input->post('optype')),
								  'date' => mysql_real_escape_string($this->input->post('odate')),
								  'time' => mysql_real_escape_string($this->input->post('otime')));
					$this->gayatin_appointment_model->add_appointment_queue($data);
					echo "<script>alert('Successfully added to queue. Our Staff will contact you for confirmation if you are on top of the queue.');</script>";
					if($this->session->userdata('username')){
						echo "<meta http-equiv=Refresh content=0;url=../appointment/view_appointment_queue>";
					}
					else{
						echo "<meta http-equiv=Refresh content=0;url=../calendar/display>";
					}
				}
				else{
					echo "<script>alert('You can only reserve appointment once per day.');</script>";
					echo "<meta http-equiv=Refresh content=0;url=../calendar/display>";
				}
			}
			else{
				echo "<script>alert('Username does not exists.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}
		}else{
			$data = array('username' =>  mysql_real_escape_string($this->input->post('uname')),
						  'firstname' =>  ucwords(mysql_real_escape_string($this->input->post('fname'))),
						  'lastname' => ucwords(mysql_real_escape_string($this->input->post('lname'))),
						  'middlename' => ucwords(mysql_real_escape_string($this->input->post('mname'))),
						  'mobileno' => mysql_real_escape_string($this->input->post('cnum')),
						  'telno' => mysql_real_escape_string($this->input->post('tnum')),
						  'patienttype' => mysql_real_escape_string($this->input->post('nptype')),
						  'date' => mysql_real_escape_string($this->input->post('idate')),
						  'time' => mysql_real_escape_string($this->input->post('itime')));
			$chk = $this->gayatin_model->check_patient($data);
			$chck = $this->gayatin_model->check_username($this->input->post('uname'));
			$check = $this->gayatin_appointment_model->check_username($this->input->post('uname'));
			$chk1 = $this->gayatin_appointment_model->check_duplicate_pending_appointment_newp($data,$this->input->post('idate'));
			$chck1 = $this->gayatin_appointment_model->check_duplicate_pending_appointment_newu($this->input->post('uname'),$this->input->post('idate'));
			$checks = $this->gayatin_appointment_model->check_username_upcoming($this->input->post('uname'));
			$checks1 = $this->gayatin_appointment_model->check_duplicate_upcoming_appointment_newp($data,$this->input->post('idate'));
			$checks2 = $this->gayatin_appointment_model->check_duplicate_upcoming_appointment_newu($this->input->post('uname'),$this->input->post('idate'));

			if($chk == 0 && $chck == 0 && $check == 0 && $checks == 0){
				if($chk1 == 0 && $chck1 == 0 && $checks1 == 0 && $checks2 == 0){
					$this->gayatin_appointment_model->add_appointment_queue($data);
					echo "<script>alert('Successfully added to queue. Our Staff will contact you for confirmation if you are on top of the queue.');</script>";
					if($this->session->userdata('username')){
						echo "<meta http-equiv=Refresh content=0;url=../appointment/view_appointment_queue>";
					}
					else{
						echo "<meta http-equiv=Refresh content=0;url=../calendar/display>";
					}
				}else{
					echo "<script>alert('You can only reserve appointment once per day.');</script>";
					echo "<meta http-equiv=Refresh content=0;url=../calendar/display>";
				}
			}else{
				echo "<script>alert('Username / Patient information already exists.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}
		}
	}

	public function view_appointment_queue(){
		if($this->session->userdata('username')){
			$data['dates'] = $this->gayatin_appointment_model->get_pending_appointment();
			$this->load->view('appointment/appointment_queue',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function view_appointment_queue_time($date){
		if($this->session->userdata('username')){
			$data['time_reservations'] = $this->gayatin_appointment_model->get_pending_appointment_time($date);
			$data['date']=$date;
			if(date('l',strtotime($date))!='Saturday')
				$this->load->view('appointment/appointment_queue_time',$data);
			else
				$this->load->view('appointment/appointment_queue_timee',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function view_upcoming_appointments_timeslots($date){
		if($this->session->userdata('username')){
			$data['time_reservations'] = $this->gayatin_appointment_model->get_upcoming_appointment_timeslots($date);
			$data['date']=$date;
			if(date('l',strtotime($date))!='Saturday')
				$this->load->view('appointment/appointment_upcoming_timeslots',$data);
			else
				$this->load->view('appointment/appointment_upcoming_timeslot',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function accept_appointment($id){
		if($this->session->userdata('username')){
			$this->gayatin_appointment_model->add_appointment($id);
			echo "<script>alert('Appointment successfully updated.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../view_upcoming_appointments>";
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function successful_appointment($id){
		if($this->session->userdata('username')){
			$this->gayatin_appointment_model->add_successful_appointment($id);
			echo "<script>alert('Appointment successfully updated.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../view_upcoming_appointments>";
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function remove_pending_appointment($date,$id){
		if($this->session->userdata('username')){
			$this->gayatin_appointment_model->remove_pending_appointment($id);
			echo "<script>alert('Appointment request successfully removed.');</script>";
			redirect('appointment/view_appointment_queue_time/'.$date);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function cancel_appointment($date,$id){
		if($this->session->userdata('username')){
			$this->gayatin_appointment_model->remove_upcoming_appointment($id);
			echo "<script>alert('Appointment request successfully removed.');</script>";
			redirect('appointment/view_upcoming_appointments_timeslots/'.$date);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function view_upcoming_appointments(){
		if($this->session->userdata('username')){
			$data['dates'] = $this->gayatin_appointment_model->get_upcoming_appointments();
			$this->load->view('appointment/appointment_upcoming',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}		
	}

	public function new_appointment($day,$date){
		if(date('l', strtotime($date)) == $day){
			if(date('l', strtotime($date)) != 'Sunday'){
				$today = strtotime(date("Y-m-d", strtotime("tomorrow")));
				$rday = strtotime($date);
				if($rday>$today){
					$data['time'] = $this->gayatin_appointment_model->get_timeslots($day);
					$data['reserved'] = $this->gayatin_appointment_model->get_reserved($date);
					$data['date'] = $date;
					$data['val']=0;
					$this->load->view('appointment/appointment_new',$data);
				}
				else{
					echo "<script>alert('Scheduled appointment should be at least 2 day prior to the schedule.');</script>";
					echo "<script>window.location='".base_url()."calendar/display'</script>";
				}
			}else{
				echo "<script>alert('No schedule on sundays.');</script>";
				echo "<script>window.location='".base_url()."calendar/display'</script>";
			}
		}else{
			echo "<script>alert('There is something wrong with the date.');</script>";
			echo "<script>window.location='".base_url()."calendar/display'</script>";
		}
		
	}

	public function check_onqueue(){
		$d=$this->gayatin_appointment_model->check_onqueue($this->input->get("date",true),$this->input->get("time",true));
		echo json_encode($d);
	}

	public function check_username(){
		$d=$this->gayatin_model->check_username($this->input->get("username",true));
		echo json_encode($d);
	}

	public function check_pinfo(){
		$d=$this->gayatin_model->check_pinfo($this->input->get("firstname",true),$this->input->get("lastname",true),$this->input->get("middlename",true));
		echo json_encode($d);
	}
}
