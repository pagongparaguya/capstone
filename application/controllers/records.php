<?php  
	Class Records extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('gayatin_appointment_model');
			$this->load->model('gayatin_model');
			$this->load->model('gayatin_record_model');
		}

		public function view_history_of_appointments(){
			$this->load->view('appointment_record/appointment_record_history');
		}		

		public function view_appointment_record(){
			$this->load->view('appointment_record/appointment_record_add');
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
	}	
?>