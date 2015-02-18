<?php  
	Class Records extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('gayatin_appointment_model');
			$this->load->model('gayatin_model');
			$this->load->model('gayatin_record_model');
		}

		public function view_history_of_appointments($id){
			if($this->session->userdata('username')){
				$data['record'] = $this->gayatin_record_model->get_patient_appointment_record($id);
				$data['prof'] = $this->gayatin_model->get_patient_infobyid($id);
				$this->load->view('appointment_record/appointment_record_history',$data);
			}
			else{
				echo "<script>alert('Login is required.');</script>";
				echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
			}
		}		

		public function view_appointment_record($id){
			if($this->session->userdata('username')){
				$data['date'] = date('Y-m-d');
				$data['prof'] = $this->gayatin_model->get_patient_infobyid($id);
				$this->load->view('appointment_record/appointment_record_add',$data);
			}
			else{
				echo "<script>alert('Login is required.');</script>";
				echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
			}
		}

		public function get_services()	
	    {
	        $type = $this->input->post('type',TRUE);
	        $data['type']=$this->gayatin_record_model->get_services($type);
	        
	       $output = null;
	       $output .= "<option value='' disabled default selected style='display:none'>Select Type</option>";
	        foreach ($data['type'] as $type)
	        {
	            $output .= "<option value='".$type->dental_procedure."'>".$type->dental_procedure."</option>";
	        }

	        echo  $output;
	    }

	    public function get_price()	
	    {
	        $name = $this->input->post('name',TRUE);
	        $price=$this->gayatin_record_model->get_price($name);
	        
	       $output = null;
	       $output = $price->service_fee;

	        echo  $output;
	    }

	    public function add_appointment_record(){
	    	if($this->session->userdata('username') && $this->input->post("dentist")!=""){
	    		$data = array('patient_id'=> $this->input->post("patient_id"),
	    					  'date'=> $this->input->post('date'),
	    					  'dentistincharge'=> $this->input->post('dentist'),
	    					  'chiefcomplaint'=> $this->input->post('complaint'),
	    					  'otherfindings'=> $this->input->post('finding') );
	    		$this->gayatin_record_model->insert_new_appointment_record($data);
	    		redirect('cadmin/view_patient_profile/'.$this->input->post('patient_id'));
	    	}else if($this->session->userdata('username') && $this->input->post("fname")==""){
			redirect('records/view_appointment_record');
			}
			else{
				echo "<script>alert('Login is required.');</script>";
				echo "<meta http-equiv=Refresh content=0;url=../cadmin>";
			}
	    }
	}	
?>