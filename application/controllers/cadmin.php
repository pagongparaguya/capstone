<?php
class Cadmin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('gayatin_model');
	}

	public function index(){
		if(!$this->session->userdata('username')){
		$data['message']='';
		$this->load->view('login',$data);
		}
		else{
			redirect('pages');
		}
	}

	public function forgot_pass(){
		if(!$this->session->userdata('username')){
			$this->load->view('password_forgot');
		}
		else{
			redirect('pages');
		}
	}

	public function login(){
		if($this->session->userdata('username')){
			redirect('pages');
		}
		else if(!$this->session->userdata('username') && $this->input->post('user')){
		$user=$this->input->post('user');
		$pass=md5($this->input->post('pass'));
		$result=$this->gayatin_model->login_check($user,$pass);
			if(!empty($result)){
				$this->session->set_userdata('username',$user);
				$this->session->set_userdata('firstname',$result['firstname']);
				$this->session->set_userdata('id',$result['id']);
				if($result['type']==2)
					$this->session->set_userdata('handler',$result['type']);
				redirect('pages');
			}
			else{
				$data['message']='Username/Password is incorrect!';
				$this->load->view('login',$data);
			}
		}
		else{
			redirect('cadmin');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('pages');
	}

	public function view_patients(){
		if($this->session->userdata('username')){
		$data['profile']=$this->gayatin_model->get_profile();
		$this->load->view('profile/profile_patients',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
		
	}

	public function view_patient_profile($id){
		if($this->session->userdata('username')){
		$data['profile']=$this->gayatin_model->get_profile_info($id);
		$data['allergies']=$this->gayatin_model->get_allergy_info($id);
		$data['chronicailment']=$this->gayatin_model->get_chronicailments_info($id);
		$data['drugstaken']=$this->gayatin_model->get_drugstaken_info($id);
		$this->load->view('profile/profile_view',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function new_patient(){
		if($this->session->userdata('username')){
		$data['message']='';
		$this->load->view('profile/profile_add',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function edit_patient($id){
		if($this->session->userdata('username')){
		$data['message']='';
		$data['profile']=$this->gayatin_model->get_profile_info($id);
		$data['allergies']=$this->gayatin_model->get_allergy_info($id);
		$data['chronicailment']=$this->gayatin_model->get_chronicailments_info($id);
		$data['drugstaken']=$this->gayatin_model->get_drugstaken_info($id);
		$this->load->view('profile/profile_edit',$data);
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function add_patient(){
		if($this->session->userdata('username') && $this->input->post("fname")!=""){	
			$data =  array('username' => mysql_real_escape_string($this->input->post("uname")),
			'firstname' => ucwords(mysql_real_escape_string($this->input->post("fname"))), 
			'lastname' => ucwords(mysql_real_escape_string($this->input->post("lname"))),
			'middlename' => ucwords(mysql_real_escape_string($this->input->post("mname"))),
			'sex' => mysql_real_escape_string($this->input->post("gender")),
			'address' => ucwords(mysql_real_escape_string($this->input->post("hadd"))),
			'telno' => mysql_real_escape_string($this->input->post("htno")),
			'mobileno' => mysql_real_escape_string($this->input->post("mno")),
			'gender' => mysql_real_escape_string($this->input->post("gender")),
			'maritalstatus' => mysql_real_escape_string($this->input->post("mstat")),
			'officeaddress' => ucwords(mysql_real_escape_string($this->input->post("oadd"))),
			'officetelno' => mysql_real_escape_string($this->input->post("otno")),
			'occlusion' => mysql_real_escape_string($this->input->post("occ")),
			'periodontalcondition' => mysql_real_escape_string($this->input->post("perdon")),
			'oralhygiene' => mysql_real_escape_string($this->input->post("orhy")),
			'prevhistoryofbleeding' => mysql_real_escape_string($this->input->post("phb")),
			'bloodpressure' => mysql_real_escape_string($this->input->post("bp")),
			'createdby' => $this->session->userdata('firstname'),
			'lastmodifiedby' => $this->session->userdata('firstname'),
			'datecreated' => date("Y-m-d"),
			'datemodified' => date("Y-m-d")
			);

			$chk = $this->gayatin_model->check_patient($data);
			$chck = $this->gayatin_model->check_username($this->input->post("uname"));
			if($chk == 0 && $chck == 0){
				$id = $this->gayatin_model->add_patient($data);

				if($this->input->post('aal'))
				{
					foreach($this->input->post('aal') as $ccnt => $ctr) 
					{
						$aal = array(
									'patientid' => $id,
									'allergyname' => $this->input->post("aal")[$ccnt]);
						$this->gayatin_model->add_allergies($aal);
					}
				}

				if($this->input->post('aca'))
				{
					foreach($this->input->post('aca') as $ccnt => $ctr) 
					{
						$aca = array(
									'patientid' => $id,
									'chronicailmentname' => $this->input->post("aca")[$ccnt]);
						$this->gayatin_model->add_chronicailment($aca);
					}
				}

				if($this->input->post('adt'))
				{
					foreach($this->input->post('adt') as $ccnt => $ctr) 
					{
						$adt = array(
									'patientid' => $id,
									'drugname' => $this->input->post("adt")[$ccnt]);
						$this->gayatin_model->add_drugstaken($adt);
					}
				}
				echo "<script>alert('Successfully added.');</script>";
				redirect('cadmin/view_patients');
			}
			else{
				$data['message']='Duplicate Data / Username already exists';
				$this->load->view('profile/profile_add',$data);
			}
		}
		else if($this->session->userdata('username') && $this->input->post("fname")==""){
			redirect('cadmin/new_patient');
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
		
	}

	public function update_patient(){
		if($this->session->userdata('username')){
			$pid = $this->input->post("profid");
			$cctr = $this->input->post("cctr");
			$rctr = $this->input->post("rctr");
			$actr = $this->input->post("actr");
			$data =  array('firstname' => ucwords(mysql_real_escape_string($this->input->post("fname"))), 
			'lastname' => ucwords(mysql_real_escape_string($this->input->post("lname"))),
			'middlename' => ucwords(mysql_real_escape_string($this->input->post("mname"))),
			'sex' => mysql_real_escape_string($this->input->post("gender")),
			'address' => ucwords(mysql_real_escape_string($this->input->post("hadd"))),
			'telno' => mysql_real_escape_string($this->input->post("htno")),
			'mobileno' => mysql_real_escape_string($this->input->post("mno")),
			'gender' => mysql_real_escape_string($this->input->post("gender")),
			'maritalstatus' => mysql_real_escape_string($this->input->post("mstat")),
			'officeaddress' => ucwords(mysql_real_escape_string($this->input->post("oadd"))),
			'officetelno' => mysql_real_escape_string($this->input->post("otno")),
			'occlusion' => mysql_real_escape_string($this->input->post("occ")),
			'periodontalcondition' => mysql_real_escape_string($this->input->post("perdon")),
			'oralhygiene' => mysql_real_escape_string($this->input->post("orhy")),
			'prevhistoryofbleeding' => mysql_real_escape_string($this->input->post("phb")),
			'bloodpressure' => mysql_real_escape_string($this->input->post("bp")),
			'lastmodifiedby' => $this->session->userdata('firstname'),
			'datemodified' => date("Y-m-d")
			);

				$this->gayatin_model->update_patient($data,$pid);

				for($i=1;$i<=$actr;$i++){
					$aid = $this->input->post("allergyid".$i);
					$al = array('allergyname' => $this->input->post("al".$i));

					$this->gayatin_model->update_allergy($al,$aid);
				}

				for($i=1;$i<=$rctr;$i++){
					$rid = $this->input->post("caid".$i);
					$ca = array('chronicailmentname' => $this->input->post("ca".$i));

					$this->gayatin_model->update_chronicailments($ca,$rid);
				}

				for($i=1;$i<=$cctr;$i++){
					$did = $this->input->post("drugid".$i);
					$dt = array('drugname' => $this->input->post("dt".$i));

					$this->gayatin_model->update_drugstaken($dt,$did);
				}

				if($this->input->post('aal'))
				{
					foreach($this->input->post('aal') as $ccnt => $ctr) 
					{
						$aal = array(
									'patientid' => $pid,
									'allergyname' => $this->input->post("aal")[$ccnt]);
						$this->gayatin_model->add_allergies($aal);
					}
				}

				if($this->input->post('aca'))
				{
					foreach($this->input->post('aca') as $ccnt => $ctr) 
					{
						$aca = array(
									'patientid' => $pid,
									'chronicailmentname' => $this->input->post("aca")[$ccnt]);
						$this->gayatin_model->add_chronicailment($aca);
					}
				}

				if($this->input->post('adt'))
				{
					foreach($this->input->post('adt') as $ccnt => $ctr) 
					{
						$adt = array(
									'patientid' => $pid,
									'drugname' => $this->input->post("adt")[$ccnt]);
						$this->gayatin_model->add_drugstaken($adt);
					}
				}
				echo "<script>alert('Successfully updated.');</script>";
				redirect('cadmin/view_patients');
			}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
		
	}


	public function view_staffs(){
		if($this->session->userdata('username')){
			if($this->session->userdata('handler')){
				$data['staff'] = $this->gayatin_model->get_staffs($this->session->userdata('id'));
				$this->load->view('admin/admin_view_accounts',$data);
			}else{
				echo "<script>alert('Forbidden Access.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}
		}else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
		// echo "<script>alert('No title.');</script>";
		// echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
	}

	public function new_staff()
	{
		if($this->session->userdata('username')){
			if($this->session->userdata('handler')){
				$this->load->view('admin/admin_create_account');
			}else{
				echo "<script>alert('Forbidden Access.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}
		}else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function check_username(){
			$chck = $this->gayatin_model->check_username($this->input->post("username",true));
			echo $chck;
	}

	public function add_staff()
	{
		if($this->session->userdata('username')){
			if($this->session->userdata('handler') && $this->input->post("fname")!=""){
				$pass = md5(mysql_real_escape_string($this->input->post('password')));
				$cpass = md5(mysql_real_escape_string($this->input->post('confirm_password')));
				if($pass == $cpass){
					$data =  array('firstname' => ucwords(mysql_real_escape_string($this->input->post("fname"))), 
							'lastname' => ucwords(mysql_real_escape_string($this->input->post("lname"))),
							'username' => mysql_real_escape_string($this->input->post("username")),
							'password' => md5("wecandothis"),
							'type' => 1);
					$chk = $this->gayatin_model->check_staff($data);
					$chck = $this->gayatin_model->check_username($data);
					if($chk == 0){ 
						if($chck==0){
							$id = $this->gayatin_model->add_user($data);
							echo "<script>alert('Successfully added user.');</script>";
							echo "<meta http-equiv=Refresh content=0;url=../cadmin/view_staffs>";
						}else{
							// $data['message']='Username already exists.';
							// $this->load->view('admin_create_account',$data);
							echo "<script>alert('Username already Exists.');</script>";
							echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";		
						}
					}else{
						// $data['message']='Duplicate Data';
						// $this->load->view('admin_create_account',$data);
						echo "<script>alert('Duplicate Data.');</script>";
						echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
					}
				}else{
					echo "<script>alert('Password/Confirm Password Doesnt Match.');</script>";
					echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
				}
			}else if($this->session->userdata('handler') && $this->input->post("fname")==""){
				redirect('cadmin/new_staff');
			}else{
				echo "<script>alert('Forbidden Access.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}
		}else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function change_pass($id){
		if($this->session->userdata('username')){
			if($this->session->userdata('handler')){
				$data['id']=$id;
				$this->load->view('admin/admin_edit_account',$data);
			}
			else{
				echo "<script>alert('Forbidden Access.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}	
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function update_password(){
		if($this->session->userdata('username')){
			if($this->session->userdata('handler')){
				$sid = $this->input->post('staffid');
				$op = md5(mysql_real_escape_string($this->input->post('old_password')));
				$chk = $this->gayatin_model->check_password($op,$sid);
				if($chk == 1){ 
								$pass = mysql_real_escape_string($this->input->post('password'));
								$cpass = mysql_real_escape_string($this->input->post('confirm_password'));
								if($pass == $cpass){
									$data = array('password'=>md5($pass));
									$this->gayatin_model->update_password($data,$sid);
									echo "<script>alert('Successfully updated.');</script>";
									echo "<meta http-equiv=Refresh content=0;url=../cadmin/view_staffs>";
								}else{
									echo "<script>alert('Password/Confirm Password Doesnt Match.');</script>";
									echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
								}
				}
				else{
					echo "<script>alert('Please input your correct password .');</script>";
					echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
				}
			}
			else{
				echo "<script>alert('Forbidden Access.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function reset_password($id){
		if($this->session->userdata('username')){
			if($this->session->userdata('handler')){
				$data = array('password'=>md5("wecandothis"));
				$this->gayatin_model->update_password($data,$id);
				echo "<script>alert('Reset Password successful.');</script>";
				echo "<script>window.location='".base_url()."cadmin/view_staffs'</script>";
				// echo "<meta http-equiv=Refresh content=0;url=../cadmin/view_staffs>";
			}
			else{
				echo "<script>alert('Forbidden Access.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}	
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
	}

	public function delete_staff($id){
		if($this->session->userdata('username')){
			if($this->session->userdata('handler')){
				$this->gayatin_model->delete_staff($id);
				// echo "<meta http-equiv=Refresh content=0;url=../cadmin/view_staffs>";
				echo "<script>alert('Successfully deleted.');</script>";
				echo "<script>window.location='".base_url()."cadmin/view_staffs'</script>";
				// echo "<meta http-equiv=Refresh content=0;url=../cadmin/view_staffs>";
			}
			else{
				echo "<script>alert('Forbidden Access.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}	
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}
   	}

   	public function staff_changepass($id){
   		if($this->session->userdata('username')){
			if($this->session->userdata('handler')){
				$data['user']=$this->gayatin_model->get_users($id);
				$this->load->view('admin/admin_edit_account',$data);
			}
			else{
				echo "<script>alert('Forbidden Access.');</script>";
				echo "<script>window.onload=function goBack()  {  window.history.back()  }</script>";
			}	
		}
		else{
			echo "<script>alert('Login is required.');</script>";
			echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
		}	
   	}


}
?>